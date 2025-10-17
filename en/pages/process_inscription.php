<?php
// Include centralized configuration
require_once dirname(__DIR__, 2) . '/config.php'; 

// Check if mail function is available and configured
function check_mail_config() {
    if (!function_exists('mail')) {
        return ['status' => false, 'error' => 'PHP mail function not available'];
    }
    
    // Check if SMTP is configured in php.ini
    $smtp_server = ini_get('SMTP');
    $smtp_port = ini_get('smtp_port');
    
    if (empty($smtp_server)) {
        return ['status' => false, 'error' => 'SMTP server not configured in php.ini'];
    }
    
    return ['status' => true, 'smtp' => $smtp_server, 'port' => $smtp_port];
}
// Function to sanitize input data
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Collect and sanitize form data
    $nom_parent = sanitize_input($_POST['nom_parent']);
    $prenom_parent = sanitize_input($_POST['prenom_parent']);
    $telephone = sanitize_input($_POST['telephone']);
    $email_parent = sanitize_input($_POST['email_parent']);
    $nom_enfant = sanitize_input($_POST['nom_enfant']);
    $prenom_enfant = sanitize_input($_POST['prenom_enfant']);
    $age_enfant = sanitize_input($_POST['age_enfant']);
    $date_naissance = sanitize_input($_POST['date_naissance']);
    
    // Validate required fields
    $errors = array();
    
    if (empty($nom_parent)) {
        $errors[] = "Parent last name is required.";
    }
    
    if (empty($prenom_parent)) {
        $errors[] = "Parent first name is required.";
    }
    
    if (empty($telephone)) {
        $errors[] = "Phone number is required.";
    }
    
    if (empty($email_parent) || !filter_var($email_parent, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "A valid parent email is required.";
    }
    
    if (empty($nom_enfant)) {
        $errors[] = "Child last name is required.";
    }
    
    if (empty($prenom_enfant)) {
        $errors[] = "Child first name is required.";
    }
    
    if (empty($age_enfant)) {
        $errors[] = "Child age is required.";
    }
    
    if (empty($date_naissance)) {
        $errors[] = "Child date of birth is required.";
    }
    
    // If no errors, proceed with saving data and sending email
    if (empty($errors)) {
        
        // Connect to database and save data
        try {
            $pdo = getDBConnection();
            
            // Insert data into database
            $stmt = $pdo->prepare("INSERT INTO inscriptions (nom_parent, prenom_parent, telephone, email_parent, nom_enfant, prenom_enfant, age_enfant, date_naissance,  date_inscription) VALUES (?, ?, ?, ?, ?, ?,  ?, ?, NOW())");
            
            $result = $stmt->execute([
                $nom_parent,
                $prenom_parent,
                $telephone,
                $email_parent,
                $nom_enfant,
                $prenom_enfant,
                $age_enfant,
                $date_naissance,
            ]);
            
            if ($result) {
                // Get the inscription ID
                $inscription_id = $pdo->lastInsertId();
                
                // Check mail configuration
                $mail_config = check_mail_config();
                error_log("Mail configuration check: " . json_encode($mail_config));
                
                // Send email to admin
                $subject = "New registration - Crèche Minibulle";
                $message = "
                <html>
                <head>
                    <title>New registration</title>
                </head>
                <body>
                    <h2>New registration request received</h2>
                    <p><strong>Registration ID:</strong> #$inscription_id</p>
                    <p><strong>Submission date:</strong> " . date('d/m/Y H:i', time() + 3600) . "</p>
                    
                    <h3>Parent Information:</h3>
                    <ul>
                        <li><strong>Last name:</strong> $nom_parent</li>
                        <li><strong>First name:</strong> $prenom_parent</li>
                        <li><strong>Phone:</strong> $telephone</li>
                        <li><strong>Email:</strong> $email_parent</li>
                    </ul>
                    
                    <h3>Child Information:</h3>
                    <ul>
                        <li><strong>Last name:</strong> $nom_enfant</li>
                        <li><strong>First name:</strong> $prenom_enfant</li>
                        <li><strong>Age:</strong> $age_enfant</li>
                        <li><strong>Date of birth:</strong> " . date('d/m/Y', strtotime($date_naissance)) . "</li>
                    </ul>
                    
                    <hr>
                    <p><em>This registration was submitted via the Crèche Minibulle website.</em></p>
                </body>
                </html>
                ";
                
                // Email headers
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                $headers .= "From: " . FROM_EMAIL . "\r\n";
                $headers .= "Reply-To: $email_parent" . "\r\n";
                
                // Send email to admin
                $email_sent = mail(ADMIN_EMAIL, $subject, $message, $headers);
                
                // Debug: Log detailed email sending attempt
                error_log("=== EMAIL DEBUG ===");
                error_log("To: " . ADMIN_EMAIL);
                error_log("Subject: $subject");
                error_log("Headers: $headers");
                error_log("Result: " . ($email_sent ? 'SUCCESS' : 'FAILED'));
                error_log("Last Error: " . print_r(error_get_last(), true));
                error_log("=== END EMAIL DEBUG ===");
                
                // Store email status for display (only admin email)
                $email_status = $email_sent ? 'email_sent' : 'email_failed';
                
                // Redirect with success message and email status
                header("Location: inscription.php?status=success&email_status=$email_status");
                exit();
                
            } else {
                throw new Exception("Error saving data to the database.");
            }
            
        } catch (PDOException $e) {
            // Database connection failed - try to save to file as backup
            $backup_file = "inscriptions_backup.txt";
            $backup_data = "\n" . date('Y-m-d H:i:s') . " - New registration:\n";
            $backup_data .= "Parent: $prenom_parent $nom_parent\n";
            $backup_data .= "Email: $email_parent\n";
            $backup_data .= "Phone: $telephone\n";
            $backup_data .= "Child: $prenom_enfant $nom_enfant\n";
            $backup_data .= "Age: $age_enfant\n";
            $backup_data .= "Date of birth: $date_naissance\n";
            $backup_data .= "-------------------\n";
            
            file_put_contents($backup_file, $backup_data, FILE_APPEND | LOCK_EX);
            
            // Still try to send email even if database failed
            $subject = "New registration - Crèche Minibulle (BACKUP)";
            $message = "
            <html>
            <head>
                <title>New registration</title>
            </head>
            <body>
                <h2>New registration request received</h2>
                <p><strong>NOTE:</strong> This registration could not be saved to the database.</p>
                <p><strong>Submission date:</strong> " . date('d/m/Y H:i') . "</p>
                
                <h3>Parent Information:</h3>
                <ul>
                    <li><strong>Last name:</strong> $nom_parent</li>
                    <li><strong>First name:</strong> $prenom_parent</li>
                    <li><strong>Phone:</strong> $telephone</li>
                    <li><strong>Email:</strong> $email_parent</li>
                </ul>
                
                <h3>Child Information:</h3>
                <ul>
                    <li><strong>Last name:</strong> $nom_enfant</li>
                    <li><strong>First name:</strong> $prenom_enfant</li>
                    <li><strong>Age:</strong> $age_enfant</li>
                    <li><strong>Date of birth:</strong> " . date('d/m/Y', strtotime($date_naissance)) . "</li>
                </ul>
                
            </body>
            </html>
            ";
            
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: " . FROM_EMAIL . "\r\n";
            $headers .= "Reply-To: $email_parent" . "\r\n";
            
            mail(ADMIN_EMAIL, $subject, $message, $headers);
            
            // Redirect with success message anyway
            header("Location: inscription.php?status=success");
            exit();
        }
        
    } else {
        // Redirect with error message
        header("Location: inscription.php?status=error");
        exit();
    }
    
} else {
    // If not POST request, redirect to inscription page
    header("Location: inscription.php");
    exit();
}
?>