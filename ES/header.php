<?php
$logged_in = isset($_SESSION['user']);
$is_admin = isset($_SESSION['role']) && $_SESSION['role'] === 'admin';

// Página actual
$currentPage = basename($_SERVER['SCRIPT_NAME']);
?>
<header class="header">
    <div class="header-container">
        <div class="logo">
            <h1>Bebidas espiritosas</h1>
        </div>
        <nav class="menu">
            <?php if ($logged_in): ?>
                <span>
                    <?php
                    if ($currentPage === 'carrito.php') {
                        echo 'Carrito de ' . htmlspecialchars($_SESSION['user']);
                    } else {
                        echo 'Te damos la bienvenida, ' . htmlspecialchars($_SESSION['user']);
                    }
                    ?>
                    <?php if ($is_admin): ?>
                        (ADMINISTRADOR)
                    <?php endif; ?>
                </span>
                <a href="index.php">Inicio</a>
                <a href="carrito.php">Carrito</a>
                <a href="logout.php">Cerrar sesión</a>

                <!-- Botón de configuración, solo mostrar si no estamos en preferencias.php -->


            <?php else: ?>
                <a href="index.php">Inicio</a>
                <a href="login.php">Iniciar sesión</a>
            <?php endif; ?>
            <?php if ($currentPage !== 'preferencias.php'): ?>
                <a href="preferencias.php" class="settings-button">⚙️</a>
            <?php endif; ?>
        </nav>
    </div>
</header>