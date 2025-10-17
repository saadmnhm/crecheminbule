<?php
$current_page = basename($_SERVER['PHP_SELF']);
$current_dir = basename(dirname($_SERVER['PHP_SELF']));

// Include configuration file
require_once dirname(__DIR__) . '/config.php';

$current_script_dir = dirname($_SERVER['SCRIPT_NAME']);

$script_parts = explode('/', trim($_SERVER['SCRIPT_NAME'], '/'));

// Find current language
$current_lang = 'fr'; // Default fallback
foreach ($script_parts as $part) {
    if ($part === 'en' || $part === 'fr') {
        $current_lang = $part;
        break;
    }
}

$is_in_pages = in_array('pages', $script_parts);

// Use absolute paths for consistent navigation
$lang_root = $base_path . $current_lang . '/';
$pages_root = $base_path . $current_lang . '/pages/';

// Navigation variables
$nav_base = $lang_root;          // Always points to language root
$nav_pages = $pages_root;        // Always points to pages folder

$page_path = $current_page;
if ($current_dir === 'pages') {
    $page_path = 'pages/' . $current_page;
}

// Function to check if menu item is active
function is_active_page($page_name, $current_page, $current_dir) {
    if ($current_dir === 'pages') {
        return $page_name === $current_page;
    } else {
        return $page_name === $current_page;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php 
    // Get current page SEO data
    $seo_data = get_page_seo($current_page, 'fr');
    $page_title_final = isset($page_title) ? $page_title : $seo_data['title'];
    ?>
    
    <title><?php echo $page_title_final; ?></title>
    
    <?php echo generate_meta_tags($current_page, 'fr', isset($page_image) ? $page_image : null); ?>
    <link rel='stylesheet' id='grand-academy-pro-google-fonts-css'
        href='<?php echo $base_path; ?>assets/fontcss/css?family=Montserrat%3A300%2C400%2C500%2C600%2C700%7CRoboto%3A400%2C700%7COxygen%3A400%2C700%7CRaleway%3A300%2C400%2C500%2C600%2C700%7CPoppins%3A300%2C400%2C500%2C600%7COpen+Sans%3A300%2C400%2C500%2C600%2C700%7CLato%3A300%2C400%2C700%7CUbuntu%3A300%2C400%2C700%7CPlayfair+Display%3A400%2C700%7CLora%3A400%2C400i%2C700%2C700i%7CTitillium+Web%3A300%2C400%2C600%2C700%7CMuli%3A300%2C400%2C600%2C700%7COxygen%3A300%2C400%2C700%7CNunito+Sans%3A300%2C400%2C600%2C700%7CMaven+Pro%3A400%2C500%2C700%7CCairo%3A300%2C400%2C700%7CPhilosopher%3A400%2C700%7CDosis%3A300%2C400%2C500%2C700%7CSniglet%3A400%7CShadows+Into+Light%3A400%7CGloria+Hallelujah%3A400&#038;subset=latin%2Clatin-ext'
        type='text/css' media='all'>
    <link rel='stylesheet' id='fontawesome-all-css'
        href='<?php echo $base_path; ?>assets/css/all.min.css' type='text/css' media='all'>
    <link rel='stylesheet' id='slick-theme-css-css'
        href='<?php echo $base_path; ?>assets/css/slick-theme.min.css' type='text/css'
        media='all'>
    <link rel='stylesheet' id='slick-css-css'
        href='<?php echo $base_path; ?>assets/css/slick.min.css' type='text/css'
        media='all'>
    <link rel='stylesheet' id='magnific-popup-css-css'
        href='<?php echo $base_path; ?>assets/css/magnific-popup.min.css' type='text/css'
        media='all'>

    <link rel='stylesheet' id='grand-academy-pro-blocks-css'
        href='<?php echo $base_path; ?>assets/css/blocks.min.css' type='text/css'
        media='all'>
    <link rel='stylesheet' id='grand-academy-pro-style-css'
        href='<?php echo $base_path; ?>assets/css/style.css' type='text/css' media='all'>
    <!-- Custom widget styles -->
    <link rel='stylesheet' id='custom-widgets-css'
        href='<?php echo $base_path; ?>assets/css/custom-widgets.css' type='text/css' media='all'>
    <script type="text/javascript" src="<?php echo $base_path; ?>assets/js/jquery.min.js" id="jquery-core-js"></script>
    <script type="text/javascript" src="<?php echo $base_path; ?>assets/js/jquery-migrate.min.js" id="jquery-migrate-js"></script>
    <link rel="icon" href="<?php echo $base_path; ?>assets/images/icon/cropped-logo-creche-minibulle-1-32x32.png" sizes="32x32">
    <link rel="icon" href="<?php echo $base_path; ?>assets/images/icon/cropped-logo-creche-minibulle-1-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="<?php echo $base_path; ?>assets/images/icon/croched-logo-creche-minibulle-1-180x180.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&display=swap" rel="stylesheet">
        
    <?php echo generate_json_ld($current_page, 'fr'); ?>

</head>


