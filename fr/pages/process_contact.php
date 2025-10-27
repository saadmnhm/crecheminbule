<?php
// Include centralized configuration
require_once dirname(__DIR__, 2) . '/config.php';

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
    $nom = sanitize_input($_POST['nom']);
    $prenom = sanitize_input($_POST['prenom']);
    $email = sanitize_input($_POST['email']);
    $tel = sanitize_input($_POST['tel']);
    
    // Validate required fields
    $errors = array();
    
    if (empty($nom)) {
        $errors[] = "Le nom est obligatoire.";
    }
    
    if (empty($prenom)) {
        $errors[] = "Le prénom est obligatoire.";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Un email valide est obligatoire.";
    }
    
    if (empty($tel)) {
        $errors[] = "Le téléphone est obligatoire.";
    }
    
    // If no errors, proceed with saving data and sending email
    if (empty($errors)) {
        
        // Prepare data for JSON
        $contact_data = array(
            'id' => time() . '_' . rand(1000, 9999),
            'last_name' => $nom,
            'first_name' => $prenom,
            'email' => $email,
            'phone' => $tel,
            'language' => 'fr',
            'date' => date('Y-m-d H:i:s', time() + 3600), // +1 hour
            'timestamp' => time()
        );
        
        // Save to JSON file
        $json_file = dirname(__DIR__, 2) . '/data/contact_requests.json';
        $json_dir = dirname($json_file);
        
        // Create directory if it doesn't exist
        if (!file_exists($json_dir)) {
            mkdir($json_dir, 0777, true);
        }
        
        // Read existing data
        $existing_data = array();
        if (file_exists($json_file)) {
            $json_content = file_get_contents($json_file);
            $existing_data = json_decode($json_content, true);
            if (!is_array($existing_data)) {
                $existing_data = array();
            }
        }
        
        // Add new contact request
        $existing_data[] = $contact_data;
        
        // Save updated data
        $json_saved = file_put_contents($json_file, json_encode($existing_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        
        if ($json_saved) {
            // Send email to admin
            $subject = "Nouvelle Demande de Visite - Crèche Minibulle";
            $message = "
            <html>
            <head>
                <title>Nouvelle Demande de Visite</title>
                <style>
                    body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                    .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                    .header { background-color: #274082; color: white; padding: 20px; text-align: center; }
                    .content { background-color: #f9f9f9; padding: 20px; margin-top: 20px; }
                    .info-row { margin-bottom: 15px; }
                    .label { font-weight: bold; color: #274082; }
                    .footer { margin-top: 20px; padding: 15px; text-align: center; font-size: 12px; color: #666; }
                </style>
            </head>
            <body>
                <div class='container'>
                    <div class='header'>
                        <h2>Nouvelle Demande de Visite</h2>
                    </div>
                    <div class='content'>
                        <p><strong>Date de soumission :</strong> " . date('d/m/Y à H:i', time() + 3600) . "</p>
                        
                        <h3 style='color: #274082; border-bottom: 2px solid #274082; padding-bottom: 10px;'>Informations de Contact :</h3>
                        
                        <div class='info-row'>
                            <span class='label'>Nom :</span> $nom
                        </div>
                        <div class='info-row'>
                            <span class='label'>Prénom :</span> $prenom
                        </div>
                        <div class='info-row'>
                            <span class='label'>Email :</span> <a href='mailto:$email'>$email</a>
                        </div>
                        <div class='info-row'>
                            <span class='label'>Téléphone :</span> <a href='tel:$tel'>$tel</a>
                        </div>
                        <div class='info-row'>
                            <span class='label'>Langue :</span> Français
                        </div>
                    </div>
                    <div class='footer'>
                        <p><em>Cette demande de visite a été soumise via le site web de la Crèche Minibulle.</em></p>
                        <p>Crèche Minibulle - 27 Rue de Guise, Casablanca 20290</p>
                    </div>
                </div>
            </body>
            </html>
            ";
            
            // Email headers
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: " . FROM_EMAIL . "\r\n";
            $headers .= "Reply-To: $email" . "\r\n";
            
            // Send email to admin
            $email_sent = mail(ADMIN_EMAIL, $subject, $message, $headers);
            
            // Log email attempt
            error_log("=== CONTACT EMAIL DEBUG ===");
            error_log("To: " . ADMIN_EMAIL);
            error_log("Subject: $subject");
            error_log("Contact: $prenom $nom ($email)");
            error_log("Result: " . ($email_sent ? 'SUCCESS' : 'FAILED'));
            error_log("=== END EMAIL DEBUG ===");
            
            // // Send confirmation email to visitor
            // $visitor_subject = "Confirmation de Demande de Visite - Crèche Minibulle";
            // $visitor_message = "
            // <html>
            // <head>
            //     <title>Confirmation de Demande de Visite</title>
            //     <style>
            //         body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            //         .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            //         .header { background-color: #274082; color: white; padding: 20px; text-align: center; }
            //         .content { background-color: #f9f9f9; padding: 20px; margin-top: 20px; }
            //         .footer { margin-top: 20px; padding: 15px; text-align: center; font-size: 12px; color: #666; }
            //     </style>
            // </head>
            // <body>
            //     <div class='container'>
            //         <div class='header'>
            //             <h2>Merci pour Votre Intérêt !</h2>
            //         </div>
            //         <div class='content'>
            //             <p>Cher/Chère $prenom $nom,</p>
                        
            //             <p>Nous vous remercions pour votre demande de visite à la Crèche Minibulle.</p>
                        
            //             <p>Nous avons bien reçu vos informations et nous vous recontacterons prochainement pour planifier votre visite.</p>
                        
            //             <p><strong>Vos informations de contact :</strong></p>
            //             <ul>
            //                 <li>Email : $email</li>
            //                 <li>Téléphone : $tel</li>
            //             </ul>
                        
            //             <p>Lors de votre visite, vous découvrirez :</p>
            //             <ul>
            //                 <li>Nos espaces d'apprentissage conçus pour favoriser l'autonomie et la créativité des enfants</li>
            //                 <li>Notre équipe pédagogique passionnée</li>
            //                 <li>Nos approches éducatives innovantes</li>
            //                 <li>Vos enfants pourront profiter de notre aire de jeux pendant la visite</li>
            //             </ul>
                        
            //             <p>Au plaisir de vous accueillir bientôt !</p>
                        
            //             <p>Cordialement,<br>
            //             <strong>L'équipe de la Crèche Minibulle</strong></p>
            //         </div>
            //         <div class='footer'>
            //             <p><strong>Crèche Minibulle</strong><br>
            //             27 Rue de Guise, Casablanca 20290<br>
            //             Téléphone : +212 669-439363<br>
            //             Email : contact@crecheminibulle.ma</p>
            //         </div>
            //     </div>
            // </body>
            // </html>
            // ";
            
            // $visitor_headers = "MIME-Version: 1.0" . "\r\n";
            // $visitor_headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            // $visitor_headers .= "From: " . FROM_EMAIL . "\r\n";
            // $visitor_headers .= "Reply-To: " . ADMIN_EMAIL . "\r\n";
            
            // mail($email, $visitor_subject, $visitor_message, $visitor_headers);
            
            // Store email status
            $email_status = $email_sent ? 'email_sent' : 'email_failed';
            
            // Redirect with success message
            header("Location: contact.php?status=success&email_status=$email_status");
            exit();
            
        } else {
            // Failed to save JSON
            header("Location: contact.php?status=error&reason=save_failed");
            exit();
        }
        
    } else {
        // Validation errors
        header("Location: contact.php?status=error&reason=validation");
        exit();
    }
    
} else {
    // If not POST request, redirect to contact page
    header("Location: contact.php");
    exit();
}
?>
