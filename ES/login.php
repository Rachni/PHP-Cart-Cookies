<?php
// Iniciar la sesión
session_start();

// Simulamos el array de users. En un escenario real, los usuarios estarían en una base de datos.
$users = [
	'admin' => ['password' => '1234', 'role' => 'admin'],
	'usuario' => ['password' => 'pass', 'role' => 'user'],
	'Rachni' => ['password' => 'pass', 'role' => 'user']
];

$mensaje = ''; // Variable para mensajes de error o éxito

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
	$usuario = trim($_POST['username']);
	$contrasena = trim($_POST['password']);

	if (isset($users[$usuario]) && $users[$usuario]['password'] === $contrasena) {
		// Guardar usuario y rol en la sesión
		$_SESSION['user'] = $usuario;
		$_SESSION['role'] = $users[$usuario]['role'];

		header('Location: index.php'); // Redirige al inicio
		exit;
	} else {
		$mensaje = "Credenciales incorrectas.";
	}
}

// HEADER DINÁMICO
include 'header.php';

?>

<!DOCTYPE html>
<html>

<head>
	<title>Anabel Martínez Perdomo</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/normalize.css">
    <?php
    if (isset($_COOKIE['theme']) && $_COOKIE['theme'] === 'bright') {
        echo '<link rel="stylesheet" href="css/login_styles_bright.css">
        <link rel="stylesheet" href="css/header_styles_bright.css">';
    } else {
        echo '<link rel="stylesheet" href="css/login_styles.css"> 
        <link rel="stylesheet" href="css/header_styles.css">';
    }
    ?>
</head>

<body>
	<div class="main">
		<form method="POST">
			<label for="chk" aria-hidden="true">Iniciar Sesión</label>
			<input type="text" name="username" placeholder="Usuario" required>
			<input type="password" name="password" placeholder="Contraseña" required>
			<button type="submit" name="login">Iniciar sesión</button>
		</form>

		<!-- Mensaje de error en el login -->
		<?php if (!empty($mensaje)): ?>
			<p class="error"><?php echo htmlspecialchars($mensaje); ?></p>
		<?php endif; ?>
	</div>
</body>

</html>