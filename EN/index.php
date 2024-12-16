<?php
session_start();
include 'products.php'; // Incluye los productos
include 'header.php'; // Muestra el header dinamico
// Función para obtener el carrito desde la cookie
function getCartFromCookie()
{
    return isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];
}

// Función para añadir un producto al carrito
function addToCart($productName, $products)
{
    // Obtener el carrito de la cookie
    $cart = getCartFromCookie();

    // Verificar si el producto ya está en el carrito
    if (isset($cart[$productName])) {
        // Si ya está, incrementar la cantidad
        $cart[$productName]['quantity']++;
    } else {
        // Si no está, añadirlo al carrito
        $cart[$productName] = [
            'price' => $products[$productName]['price'],
            'quantity' => 1
        ];
    }

    // Guardar el carrito actualizado en la cookie por 1 día
    setcookie('cart', json_encode($cart), time() + 86400);
}

// Si el formulario es enviado para añadir un producto
if (isset($_POST['addProduct'])) {
    $productName = $_POST['addProduct'];
    addToCart($productName, $products);  // Añadir el producto al carrito
}
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
        echo '<link rel="stylesheet" href="css/index_styles_bright.css">
        <link rel="stylesheet" href="css/header_styles_bright.css">';
    } else {
        echo '<link rel="stylesheet" href="css/index_styles.css"> 
        <link rel="stylesheet" href="css/header_styles.css">';
    }
    ?>
    ?>
    <link rel="stylesheet" href="css/header_styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>

<body class="index-page">
    <!-- PRODUCTOS -->
    <div class="container">
        <div class="flex-container">
            <div class="products">
                <h2>Products</h2>
                <form method="POST">
                    <!-- Por cada item del array, muestra una tarjeta con nombre, precio, descripción y imagen -->
                    <?php foreach ($products as $name => $product): ?>
                        <div class="product-card">
                            <img src="<?php echo $product['image']; ?>" alt="<?php echo $name; ?>" class="product-image">
                            <div class="product-info">
                                <h3 class="product-name"><?php echo $name; ?></h3>
                                <p class="product-price"><?php echo number_format($product['price'], 2); ?>€</p>
                                <p class="product-description"><?php echo $product['description']; ?></p>
                                <!-- Botón para añadir al carrito -->

                                <!-- Check si el usuario ha iniciado sesión -->
                                <?php if (isset($_SESSION['user'])): ?>
                                    <button type="submit" name="addProduct" value="<?php echo $name; ?>" class="add-to-cart">Add to cart</button>
                                <?php else: ?>
                                    <!-- Botón para redirigir a login.php -->
                                    <button type="button" onclick="window.location.href='login.php'" class="add-to-cart">Log in to add to cart</button>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </form>
            </div>
        </div>
    </div>
</body>

</html>