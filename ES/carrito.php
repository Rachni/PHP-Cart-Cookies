<?php
// Iniciar sesión
session_start();

// Array de productos
include 'productos.php';

// Header
include 'header.php';



// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['user'])) {
    // Si no ha iniciado sesión, redirigir a la página de login
    header('Location: login.php');
    exit;
}

// Función para obtener el carrito desde las cookies
function getCartFromCookie()
{
    return isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];
}

// Añadir producto al carrito
function addProductToCart($productName, $products)
{
    $cart = getCartFromCookie();

    if (isset($cart[$productName])) {
        $cart[$productName]['quantity']++;
    } else {
        $cart[$productName] = [
            'price' => $products[$productName]['price'],
            'quantity' => 1
        ];
    }

    // Guardar el carrito actualizado en la cookie por 1 día
    setcookie('cart', json_encode($cart), time() + 86400, '/');
    header('Location: carrito.php');  // Redirige para reflejar los cambios
    exit;
}

// Eliminar producto del carrito
function removeProductFromCart($productName)
{
    $cart = getCartFromCookie();

    if (isset($cart[$productName])) {
        // Decrease quantity or remove product
        if ($cart[$productName]['quantity'] > 1) {
            $cart[$productName]['quantity']--;
        } else {
            unset($cart[$productName]);
        }

        // Update the cart cookie with the new data (reset expiration)
        setcookie('cart', json_encode($cart), time() + 86400, '/');  // Expiration: 1 day
        // Redirect to update cart on the page
        header('Location: carrito.php');
        exit();
    }
}
// Vaciar carrito
function emptyCart()
{
    setcookie('cart', '', time() - 3600); // Eliminar la cookie
    header('Location: carrito.php');
    exit;
}

// Procesar la solicitud POST
if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    if (isset($_POST['addProduct'])) {
        addProductToCart($_POST['addProduct'], $products);
    }

    
if (isset($_POST['removeProduct'])) {
    removeProductFromCart($_POST['removeProduct']); // Llamar a la función de eliminación
    header('Location: carrito.php'); // Redirigir para actualizar la interfaz
    exit;
}

        removeProductFromCart($_POST['removeProduct']);
    }

    if (isset($_POST['emptyCart'])) {
        emptyCart();
    }

$cart = getCartFromCookie();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anabel Martínez Perdomo</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/header_styles.css">
    <?php
    if (isset($_COOKIE['theme']) && $_COOKIE['theme'] === 'bright') {
        echo '<link rel="stylesheet" href="css/carrito_styles_bright.css">
        <link rel="stylesheet" href="css/header_styles_bright.css">';
    } else {
        echo '<link rel="stylesheet" href="css/carrito_styles.css"> 
        <link rel="stylesheet" href="css/header_styles.css">';
    }
    ?>
</head>

<body>
    <div class="cart">
        <h2>Carrito de compras</h2>
        <!-- Si el carrito no está vacío, lo muestra -->
        <?php if (!empty($cart)) { ?>
            <table>
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Subtotal</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total = 0;
                    foreach ($cart as $name => $item) {
                        $subtotal = $item['price'] * $item['quantity'];
                        $total += $subtotal;
                    ?>
                        <tr>
                            <td><?php echo htmlspecialchars($name); ?></td>
                            <td><?php echo htmlspecialchars($item['quantity']); ?></td>
                            <td><?php echo number_format($item['price'], 2); ?> €</td>
                            <td><?php echo number_format($subtotal, 2); ?> €</td>
                            <td>
                                <form method="POST" action="carrito.php">
                                    <input type="hidden" name="removeProduct" value="<?php echo htmlspecialchars($name); ?>">
                                    <button type="submit" class="remove-item-btn">Borrar</button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                    <tr class="total-row">
                        <td colspan="3">Total</td>
                        <td><?php echo number_format($total, 2); ?> €</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <form method="POST" action="carrito.php">
                <button type="submit" name="emptyCart" class="empty-cart-btn">Vaciar carrito</button>
            </form>
        <?php } else { ?>
            <p>El carrito está vacío</p>
        <?php } ?>
    </div>
</body>

</html>