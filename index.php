<?php
// Redirect to French version by default
session_start();

$default_language = 'fr';
$available_languages = ['fr', 'en'];

// // Check for browser language preference
// if (!isset($_SESSION['language'])) {
//     if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
//         $browser_language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
//         if (in_array($browser_language, $available_languages)) {
//             $default_language = $browser_language;
//         }
//     }
// }

// Use session language if available
if (isset($_SESSION['language']) && in_array($_SESSION['language'], $available_languages)) {
    $default_language = $_SESSION['language'];
}

// Use relative redirect - simpler and more reliable
header("Location: ./$default_language/index.php", true, 302);
exit();
?>