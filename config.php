<?php
/**
 * Configuration file for Minibulle website
 * Change the BASE_DIR constant to update the base directory for the entire site
 */

// Base directory name - change this value to update the entire site's base path
define('BASE_DIR', 'creche');

// Build the base path
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$base_path = $protocol . '://' . $host . '/' . BASE_DIR . '/';

// Language navigation base path
define('LANG_BASE_PATH', '/' . BASE_DIR);

// Database Configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'creche_db');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8mb4');

// Database connection function
function getDBConnection() {
    try {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
        $pdo = new PDO($dsn, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    } catch (PDOException $e) {
        error_log("Database connection failed: " . $e->getMessage());
        throw new Exception("Database connection failed");
    }
}

// Email Configuration for inscription notifications
define('ADMIN_EMAIL', 'saadmnhm@gmail.com');
define('FROM_EMAIL', 'noreply@minibulle.com');
define('FROM_NAME', 'Crèche Minibulle');

// Success and error messages (can be used by both languages)
$messages = [
    'en' => [
        'success' => 'Your registration has been submitted successfully. We will contact you soon.',
        'error' => 'An error occurred while processing your registration. Please try again.',
        'validation_error' => 'Please fill in all required fields correctly.',
        'email_error' => 'Please enter a valid email address.'
    ],
    'fr' => [
        'success' => 'Votre inscription a été soumise avec succès. Nous vous contacterons bientôt.',
        'error' => 'Une erreur s\'est produite lors du traitement de votre inscription. Veuillez réessayer.',
        'validation_error' => 'Veuillez remplir tous les champs obligatoires correctement.',
        'email_error' => 'Veuillez saisir une adresse email valide.'
    ]
];

// SEO Configuration and Meta Tags
$seo_config = [
    'site_name' => 'Crèche Minibulle',
    'default_image' => $base_path . 'assets/images/creche_jeux.jpeg',
    'facebook_app_id' => '', // Add your Facebook App ID if you have one
    'twitter_site' => '@crecheminibulle', // Add your Twitter handle
    'organization' => [
        'name' => 'Crèche Minibulle',
        'type' => 'EducationalOrganization',
        'address' => 'Casablanca, Morocco',
        'phone' => '+212-XXXXXXXXX', // Add your phone number
        'email' => 'contact@crecheminibulle.ma'
    ]
];

// Page-specific SEO data
$page_seo = [
    'en' => [
        'index.php' => [
            'title' => 'Minibulle - Nursery & Kindergarten in Casablanca Morocco',
            'description' => 'Premium trilingual nursery and kindergarten in Casablanca. Quality early childhood education with French, English and Arabic programs. Modern facilities and caring environment.',
            'keywords' => 'nursery Casablanca, kindergarten morocco, trilingual education, early childhood, creche Casablanca, preschool morocco',
            'og_title' => 'Minibulle - Premium Nursery & Kindergarten Casablanca',
            'og_description' => 'Discover our trilingual nursery in Casablanca offering quality early childhood education in a modern, caring environment.'
        ],
        'a_propos.php' => [
            'title' => 'About Us - Minibulle Nursery Casablanca',
            'description' => 'Learn about Minibulle nursery - our educational approach, experienced staff, and commitment to quality early childhood development in Casablanca.',
            'keywords' => 'about minibulle, nursery staff, educational approach, Casablanca kindergarten team',
            'og_title' => 'About Minibulle - Our Story & Educational Philosophy',
            'og_description' => 'Discover our passion for early childhood education and our dedicated team of professionals.'
        ],
        'espace.php' => [
            'title' => 'Our Facilities - Modern Nursery Spaces in Casablanca',
            'description' => 'Explore our modern, safe and stimulating facilities designed for optimal early childhood development. Spacious classrooms, play areas and more.',
            'keywords' => 'nursery facilities, modern classrooms, safe environment, play areas Casablanca',
            'og_title' => 'Our Modern Facilities - Safe & Stimulating Environment',
            'og_description' => 'Tour our beautiful, modern nursery facilities designed with your child\'s development in mind.'
        ],
        'pedagogique.php' => [
            'title' => 'Our Educational Approach - Trilingual Early Learning',
            'description' => 'Discover our innovative trilingual educational approach combining the best teaching methods for optimal child development in French, English and Arabic.',
            'keywords' => 'trilingual education, teaching methods, child development, educational approach morocco',
            'og_title' => 'Innovative Trilingual Education - Our Teaching Philosophy',
            'og_description' => 'Learn about our unique educational approach that nurtures young minds through multiple languages and methodologies.'
        ],
        'inscription.php' => [
            'title' => 'Enrollment - Join Minibulle Nursery Casablanca',
            'description' => 'Enroll your child at Minibulle nursery in Casablanca. Simple enrollment process for quality trilingual early childhood education.',
            'keywords' => 'nursery enrollment Casablanca, kindergarten registration, join minibulle, admission process',
            'og_title' => 'Enroll Your Child - Join Our Nurturing Community',
            'og_description' => 'Start your child\'s educational journey with us. Simple enrollment process for premium nursery education.'
        ],
        'contact.php' => [
            'title' => 'Contact Us - Minibulle Nursery Casablanca',
            'description' => 'Contact Minibulle nursery in Casablanca. Get information about enrollment, programs, and visit our facilities. We\'re here to help!',
            'keywords' => 'contact nursery Casablanca, minibulle phone, nursery address Casablanca, kindergarten contact',
            'og_title' => 'Contact Minibulle - Get in Touch Today',
            'og_description' => 'Ready to learn more? Contact us for enrollment information or to schedule a visit to our nursery.'
        ],
        'blog.php' => [
            'title' => 'Blog - Early Childhood Education Tips & News',
            'description' => 'Read our blog for expert tips on early childhood education, parenting advice, and news from Minibulle nursery in Casablanca.',
            'keywords' => 'parenting tips, child development blog, early education advice, nursery news Casablanca',
            'og_title' => 'Educational Blog - Tips for Parents & Child Development',
            'og_description' => 'Expert advice and insights on early childhood education, parenting tips, and developmental milestones.'
        ],
        'evenements.php' => [
            'title' => 'Events & Activities - Minibulle Nursery Casablanca',
            'description' => 'Discover the exciting events and activities at Minibulle nursery. From educational workshops to fun celebrations for children.',
            'keywords' => 'nursery events Casablanca, children activities, educational workshops, kindergarten celebrations',
            'og_title' => 'Fun Events & Educational Activities',
            'og_description' => 'Join us for exciting events and activities designed to enrich your child\'s learning experience.'
        ]
    ],
    'fr' => [
        'index.php' => [
            'title' => 'Minibulle - Crèche & Maternelle Trilingue à Casablanca Maroc',
            'description' => 'Crèche et maternelle trilingue de qualité à Casablanca. Éducation préscolaire d\'excellence avec programmes français, anglais et arabe. Installations modernes et environnement bienveillant.',
            'keywords' => 'crèche Casablanca, maternelle maroc, éducation trilingue, petite enfance, pouponnière Casablanca, préscolaire maroc',
            'og_title' => 'Minibulle - Crèche & Maternelle Trilingue Premium Casablanca',
            'og_description' => 'Découvrez notre crèche trilingue à Casablanca offrant une éducation préscolaire de qualité dans un environnement moderne et bienveillant.'
        ],
        'a_propos.php' => [
            'title' => 'À Propos - Crèche Minibulle Casablanca',
            'description' => 'Découvrez la crèche Minibulle - notre approche pédagogique, équipe expérimentée, et engagement pour le développement de la petite enfance à Casablanca.',
            'keywords' => 'équipe minibulle, approche pédagogique, crèche Casablanca équipe, éducatrices qualifiées',
            'og_title' => 'À Propos de Minibulle - Notre Histoire & Philosophie',
            'og_description' => 'Découvrez notre passion pour l\'éducation préscolaire et notre équipe dévouée de professionnels.'
        ],
        'espace.php' => [
            'title' => 'Nos Espaces - Infrastructure Moderne Crèche Casablanca',
            'description' => 'Explorez nos installations modernes, sécurisées et stimulantes conçues pour le développement optimal de la petite enfance. Salles spacieuses, aires de jeux et plus.',
            'keywords' => 'installations crèche, salles modernes, environnement sécurisé, aires de jeux Casablanca',
            'og_title' => 'Nos Espaces Modernes - Environnement Sûr & Stimulant',
            'og_description' => 'Visitez nos belles installations modernes conçues pour le développement de votre enfant.'
        ],
        'pedagogique.php' => [
            'title' => 'Notre Approche Pédagogique - Apprentissage Trilingue',
            'description' => 'Découvrez notre approche pédagogique trilingue innovante combinant les meilleures méthodes d\'enseignement pour un développement optimal en français, anglais et arabe.',
            'keywords' => 'éducation trilingue, méthodes pédagogiques, développement enfant, approche éducative maroc',
            'og_title' => 'Éducation Trilingue Innovante - Notre Philosophie Pédagogique',
            'og_description' => 'Découvrez notre approche éducative unique qui nourrit les jeunes esprits à travers plusieurs langues et méthodologies.'
        ],
        'inscription.php' => [
            'title' => 'Inscription - Rejoignez la Crèche Minibulle Casablanca',
            'description' => 'Inscrivez votre enfant à la crèche Minibulle à Casablanca. Processus d\'inscription simple pour une éducation préscolaire trilingue de qualité.',
            'keywords' => 'inscription crèche Casablanca, admission maternelle, rejoindre minibulle, processus inscription',
            'og_title' => 'Inscrivez Votre Enfant - Rejoignez Notre Communauté',
            'og_description' => 'Commencez le parcours éducatif de votre enfant avec nous. Processus d\'inscription simple pour une éducation préscolaire premium.'
        ],
        'contact.php' => [
            'title' => 'Nous Contacter - Crèche Minibulle Casablanca',
            'description' => 'Contactez la crèche Minibulle à Casablanca. Obtenez des informations sur les inscriptions, programmes, et visitez nos installations. Nous sommes là pour vous aider!',
            'keywords' => 'contact crèche Casablanca, téléphone minibulle, adresse crèche Casablanca, contact maternelle',
            'og_title' => 'Contactez Minibulle - Prenez Contact Aujourd\'hui',
            'og_description' => 'Prêt à en savoir plus ? Contactez-nous pour les informations d\'inscription ou pour planifier une visite de notre crèche.'
        ],
        'blog.php' => [
            'title' => 'Blog - Conseils Éducation Préscolaire & Actualités',
            'description' => 'Lisez notre blog pour des conseils d\'experts sur l\'éducation préscolaire, conseils parentaux, et actualités de la crèche Minibulle à Casablanca.',
            'keywords' => 'conseils parentaux, blog développement enfant, conseils éducation préscolaire, actualités crèche Casablanca',
            'og_title' => 'Blog Éducatif - Conseils Parents & Développement Enfant',
            'og_description' => 'Conseils d\'experts et perspectives sur l\'éducation préscolaire, conseils parentaux, et étapes de développement.'
        ],
        'evenements.php' => [
            'title' => 'Événements & Activités - Crèche Minibulle Casablanca',
            'description' => 'Découvrez les événements et activités passionnants à la crèche Minibulle. Des ateliers éducatifs aux célébrations amusantes pour enfants.',
            'keywords' => 'événements crèche Casablanca, activités enfants, ateliers éducatifs, célébrations maternelle',
            'og_title' => 'Événements Amusants & Activités Éducatives',
            'og_description' => 'Rejoignez-nous pour des événements passionnants et activités conçues pour enrichir l\'expérience d\'apprentissage de votre enfant.'
        ]
    ]
];

// Function to get page SEO data
function get_page_seo($page_name, $language = 'en') {
    global $page_seo, $seo_config;
    
    if (isset($page_seo[$language][$page_name])) {
        return $page_seo[$language][$page_name];
    } else {
        // Return default SEO data
        return [
            'title' => $seo_config['site_name'],
            'description' => 'Premium nursery and kindergarten in Casablanca, Morocco. Quality early childhood education in a modern, caring environment.',
            'keywords' => 'nursery Casablanca, kindergarten morocco, early childhood education',
            'og_title' => $seo_config['site_name'],
            'og_description' => 'Quality early childhood education in Casablanca, Morocco.'
        ];
    }
}

// Function to generate meta tags
function generate_meta_tags($page_name, $language = 'en', $custom_image = null) {
    global $seo_config, $base_path;
    
    $seo_data = get_page_seo($page_name, $language);
    $current_url = $base_path . $language . '/' . ($page_name !== 'index.php' ? 'pages/' . $page_name : '');
    $image_url = $custom_image ? $custom_image : $seo_config['default_image'];
    
    $meta_tags = "
    <!-- SEO Meta Tags -->
    <meta name=\"description\" content=\"{$seo_data['description']}\">
    <meta name=\"keywords\" content=\"{$seo_data['keywords']}\">
    <meta name=\"author\" content=\"{$seo_config['site_name']}\">
    <meta name=\"robots\" content=\"index, follow\">
    <link rel=\"canonical\" href=\"{$current_url}\">
    
    <!-- Open Graph Meta Tags -->
    <meta property=\"og:title\" content=\"{$seo_data['og_title']}\">
    <meta property=\"og:description\" content=\"{$seo_data['og_description']}\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"{$current_url}\">
    <meta property=\"og:image\" content=\"{$image_url}\">
    <meta property=\"og:site_name\" content=\"{$seo_config['site_name']}\">
    <meta property=\"og:locale\" content=\"" . ($language === 'fr' ? 'fr_FR' : 'en_US') . "\">
    
    <!-- Twitter Card Meta Tags -->
    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta name=\"twitter:title\" content=\"{$seo_data['og_title']}\">
    <meta name=\"twitter:description\" content=\"{$seo_data['og_description']}\">
    <meta name=\"twitter:image\" content=\"{$image_url}\">";
    
    if (!empty($seo_config['twitter_site'])) {
        $meta_tags .= "\n    <meta name=\"twitter:site\" content=\"{$seo_config['twitter_site']}\">";
    }
    
    if (!empty($seo_config['facebook_app_id'])) {
        $meta_tags .= "\n    <meta property=\"fb:app_id\" content=\"{$seo_config['facebook_app_id']}\">";
    }
    
    return $meta_tags;
}

// Function to generate JSON-LD structured data
function generate_json_ld($page_name, $language = 'en') {
    global $seo_config, $base_path;
    
    $seo_data = get_page_seo($page_name, $language);
    $current_url = $base_path . $language . '/' . ($page_name !== 'index.php' ? 'pages/' . $page_name : '');
    
    $json_ld = [
        '@context' => 'https://schema.org',
        '@type' => $seo_config['organization']['type'],
        'name' => $seo_config['organization']['name'],
        'url' => $base_path,
        'logo' => $base_path . 'assets/images/icon/cropped-logo-creche-minibulle-1-192x192.png',
        'description' => $seo_data['description'],
        'address' => [
            '@type' => 'PostalAddress',
            'addressLocality' => 'Casablanca',
            'addressCountry' => 'Morocco'
        ],
        'contactPoint' => [
            '@type' => 'ContactPoint',
            'telephone' => $seo_config['organization']['phone'],
            'contactType' => 'customer service',
            'email' => $seo_config['organization']['email']
        ]
    ];
    
    return '<script type="application/ld+json">' . json_encode($json_ld, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
}
?>
