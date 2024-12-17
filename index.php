<?php
$language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

// Redirect to folder based on user's browser language
switch ($language) {
    case 'es':
        header("Location: ES/index.php");
        break;
    case 'en':
        header("Location: EN/index.php");
        break;
    default:
        header("Location: EN/index.php");
        break;
}
exit();
?>
