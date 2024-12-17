<?php
session_start();
// Interacción con el formulario
if (isset($_POST['submit'])) {
    $language = $_POST['language'];
    $theme = $_POST['theme'];

    //Crear cookies
    setcookie('language', $language, time() + (30 * 24 * 60 * 60));
    setcookie('theme', $theme, time() + (30 * 24 * 60 * 60));

    $cart = isset($_COOKIE['cart']) ? $_COOKIE['cart'] : null;
    if ($cart && !isset($_COOKIE['cart'])) {
        setcookie('cart', $cart, time() + (30 * 24 * 60 * 60)); // Reset expiration only if cart exists
    }

    // Redirección
    if ($language === 'en') {
        header("Location: ../EN/index.php");
    } else {
        header("Location: ../ES/index.php");
        exit();
    }
}

include 'header.php'; /
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anabel Martínez Perdomo</title>
    <link rel="stylesheet" href="css/normalize.css">
    <?php
    if (isset($_COOKIE['theme']) && $_COOKIE['theme'] === 'bright') {
        echo '<link rel="stylesheet" href="css/preferencias_styles_bright.css">
        <link rel="stylesheet" href="css/header_styles_bright.css">';
    } else {
        echo '<link rel="stylesheet" href="css/preferencias_styles.css"> 
        <link rel="stylesheet" href="css/header_styles.css">';
    }
    ?>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">

</head>


<form method="POST" action="">

    <!-- LANGUAGE -->
    <fieldset>
        <label for="language">🌍</label>
        <select name="language" id="language" required>
            <!-- Set default language to Spanish if no cookie is set -->
            <option value="en" <?php echo (isset($_COOKIE['language']) && $_COOKIE['language'] === 'en') || !isset($_COOKIE['language']) ? 'selected' : ''; ?>>English</option>
            <option value="es" <?php echo (isset($_COOKIE['language']) && $_COOKIE['language'] === 'es') ? 'selected' : ''; ?>>Español</option>
        </select>
    </fieldset>

    <!-- THEME -->
    <fieldset>
        <label for="theme">🌞🌙</label>
        <select name="theme" id="theme" required>
            <!-- Set default theme to 'dark' if no cookie is set -->
            <option value="bright" <?php echo (isset($_COOKIE['theme']) && $_COOKIE['theme'] === 'bright') ? 'selected' : ''; ?>>🔆</option>
            <option value="dark" <?php echo (isset($_COOKIE['theme']) && $_COOKIE['theme'] === 'dark') || !isset($_COOKIE['theme']) ? 'selected' : ''; ?>>🌑</option>
        </select>
    </fieldset>


    <button type="submit" name="submit">✅</button>
</form>

</body>

</html>