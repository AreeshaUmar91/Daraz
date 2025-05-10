<?php
session_start();

// Initialize the cart session if not set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Handle adding an item to the cart
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['product'])) {
    $productHTML = $_POST['product'];

    // Ensure the "Buy Now" button is removed (just in case)
    $productHTML = preg_replace('/<button[^>]*>Buy Now<\/button>/', '', $productHTML);

    $_SESSION['cart'][] = $productHTML; // Add product to session
    header("Location: cart.php"); // Refresh page after adding
    exit;
}

// Handle deleting an item from the cart
if (isset($_GET['remove'])) {
    $index = (int) $_GET['remove']; // Ensure it's an integer to avoid security issues
    if (isset($_SESSION['cart'][$index])) {
        unset($_SESSION['cart'][$index]);
        $_SESSION['cart'] = array_values($_SESSION['cart']); // Re-index the array
    }
    header("Location: cart.php"); // Refresh cart page
    exit;
}

// Calculate total price
$totalPrice = 0;
foreach ($_SESSION['cart'] as $product) {
    preg_match('/Rs\. ([\d,]+\.?\d*)/', $product, $matches);
    if (isset($matches[1])) {
        $price = str_replace(',', '', $matches[1]); // Remove commas
        $totalPrice += floatval($price);
    }
}

// Define shipping fee
$shippingFee = 200;

// Calculate dynamic height: Initial height is 500px, increases by 300px per item
$cartHeight = 500 + (count($_SESSION['cart']) * 300);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
            text-align: center;
        }
        .cart-container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            height: <?php echo $cartHeight; ?>px;
        }
        .cart-item {
            display: flex;
            align-items: center;
            background: #fff;
            border-radius: 8px;
            padding: 35px;
            margin: 10px 0;
            box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1);
            text-align: left;
            height: 300px;
        }
        .product-details {
            flex-grow: 1;
        }
        .delete-btn {
            background: linear-gradient(135deg, #ff3b3b, #c30000);
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 8px;
            width: 120px;
            font-size: 16px;
            font-weight: bold;
            transition: all 0.3s ease-in-out;
            box-shadow: 0px 4px 8px rgba(255, 0, 0, 0.3);
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            overflow: hidden;
        }
        .cart-footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: #ff671b;
            padding: 10px 15px;
            box-shadow: 0px -2px 10px rgba(0, 0, 0, 0.15);
            text-align: center;
            color: white;
            font-size: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 10px 10px 0 0;
            font-family: 'Poppins', sans-serif;
        }
        .bill-details {
            text-align: left;
            flex-grow: 1;
            padding: 12px 80px;
            font-size: 16px;
            color: #fff;
            font-weight: 700;
            letter-spacing: 0.8px;
            line-height: 1.8;
            font-family: 'Poppins', sans-serif;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
        }
        .proceed-btn {
            background: linear-gradient(135deg, #ff671b, #ff4500);
            color: white;
            padding: 10px 35px;
            border: none;
            cursor: pointer;
            border-radius: 30px;
            font-size: 16px;
            font-weight: bold;
            transition: all 0.3s ease-in-out;
            box-shadow: 0px 4px 10px rgba(255, 103, 27, 0.3);
            margin-right: 80px;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-family: 'Poppins', sans-serif;
            position: relative;
            overflow: hidden;
        }
        .proceed-btn:hover {
            background: linear-gradient(135deg, #ff4500, #ff671b);
            transform: scale(1.08);
        }
        .cartbox {
            text-align: center;
            margin-top: 30px;
        }
        .cartpic {
            width: 150px;
            display: block;
            margin: 0 auto 20px;
        }
        .carttext {
            font-size: 18px;
            color: #555;
        }
    </style>
</head>
<body>

<div class="cart-container">
    <?php if (!empty($_SESSION['cart'])): ?>
        <?php foreach ($_SESSION['cart'] as $index => $product): ?>
            <div class="cart-item">
                <div class="product-details">
                    <?php echo htmlspecialchars_decode($product); ?>
                </div>
                <form method="get" action="cart.php">
                    <input type="hidden" name="remove" value="<?php echo $index; ?>">
                    <button type="submit" class="delete-btn">Delete</button>
                </form>
            </div>
        <?php endforeach; ?>

        <a href="all.php">
            <button class="proceed-btn">CONTINUE SHOPPING</button>
        </a>

    <?php else: ?>
        <div class="cartbox">
            <img class="cartpic" src="cartpic.webp" alt="Cart Image">
            <p class="carttext">There are no items in this cart</p>
            <a href="all.php">
                <button class="proceed-btn">CONTINUE SHOPPING</button>
            </a>
        </div>
    <?php endif; ?>
</div>

<?php if (!empty($_SESSION['cart'])): ?>
    <div class="cart-footer">
        <div class="bill-details">
            <p>Subtotal: Rs. <?php echo number_format($totalPrice, 2); ?> PKR</p>
            <p>Shipping Fee: Rs. <?php echo number_format($shippingFee, 2); ?> PKR</p>
        </div>
        <a href="checkout.php">
            <button class="proceed-btn">PROCEED TO CHECKOUT</button>
        </a>
    </div>
<?php endif; ?>

</body>
</html>
