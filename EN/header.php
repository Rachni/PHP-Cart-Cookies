<?php
$logged_in = isset($_SESSION['user']);
$is_admin = isset($_SESSION['role']) && $_SESSION['role'] === 'admin';

// Current page
$currentPage = basename($_SERVER['SCRIPT_NAME']);
?>
<header class="header">
    <div class="header-container">
        <div class="logo">
            <h1>Spirits and Liquor</h1>
        </div>
        <nav class="menu">
            <?php if ($logged_in): ?>
                <span>
                    <?php
                    if ($currentPage === 'carrito.php') {
                        echo htmlspecialchars($_SESSION['user']) . "'s Shopping cart";
                    } else {
                        echo 'Welcome, ' . htmlspecialchars($_SESSION['user']);
                    }
                    ?>
                    <?php if ($is_admin): ?>
                        (ADMIN)
                    <?php endif; ?>
                </span>
                <a href="index.php">Home</a>
                <a href="cart.php">Cart</a>
                <a href="logout.php">Log Out</a>

            <?php else: ?>
                <a href="index.php">Home</a>
                <a href="login.php">Log In</a>
            <?php endif; ?>
            <?php if ($currentPage !== 'preferences.php'): ?>
                <a href="preferences.php" class="settings-button">⚙️</a>
            <?php endif; ?>
        </nav>
    </div>
</header>