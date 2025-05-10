<?php
session_start();

$shippingFee = 200; // Fixed shipping fee

// Calculate subtotal from cart
$subtotal = 0;
if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $product) {
        preg_match('/Rs\. ([0-9]+\.?[0-9]*)/', $product, $matches);
        if (isset($matches[1])) {
            $subtotal += floatval($matches[1]);
        }
    }
}

// Calculate total amount
$totalAmount = $subtotal + $shippingFee;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $address = htmlspecialchars($_POST['address']);

    if (!empty($name) && !empty($email) && !empty($address) && !empty($_SESSION['cart'])) {
        $_SESSION['cart'] = []; // Clear the cart

        // Store user details in session for use in thankyou.php
        $_SESSION['order_name'] = $name;

        // Redirect to the thank you page
        header("Location: thankyou.php");
        exit;
    } else {
        $error = "Please fill in all fields and ensure your cart is not empty.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <style>
       /* Global Styles */
       body {
    font-family: 'Poppins', sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    min-height: 100vh; /* Ensures full viewport height */
   
}


/* Checkout Container */
.checkout-container {

    width: 550px;
    background: #ffffff;
    padding: 60px;
    border-radius: 12px;
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
    text-align: left;
    position: relative;
    margin-bottom: 100px;
}

/* Form Styling */
.checkout-container input {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border-radius: 8px;
    border: 1px solid #ddd;
    font-size: 15px;
    transition: all 0.3s ease-in-out;
    outline: none;
  
}

/* Input Focus Effect */
.checkout-container input:focus {
    border-color: #ff671b;
    box-shadow: 0px 0px 6px rgba(255, 103, 27, 0.3);
}

/* Cart Items */
.cart-items {
    background: #fffaf0;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.cart-item {
    background: #ffffff;
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

.cart-item:last-child {
    border-bottom: none;
}

/* Checkout Footer */
.checkout-footer {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background: #ff671b;
    padding: 15px;
    box-shadow: 0px -2px 10px rgba(0, 0, 0, 0.15);
    text-align: center;
    color: white;
    font-size: 16px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-radius: 10px 10px 0 0;
}

/* Bill Details */
.bill-details {
    text-align: left;
    padding: 10px 20px;
    font-size: 16px;
    color: #fff;
    font-weight: bold;
    letter-spacing: 0.8px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(255, 255, 255, 0.15);
    transition: all 0.3s ease-in-out;
}

.bill-details:hover {
    background: rgba(255, 255, 255, 0.15);
    transform: scale(1.02);
    box-shadow: 0px 6px 12px rgba(255, 255, 255, 0.2);
}

/* Amount Highlight */
.bill-details p span {
    color: #ffbe00;
    font-weight: 800;
}

/* Place Order Button */
.place-order-btn {
    background: linear-gradient(135deg, #ff671b, #ff4500);
    color: white;
    padding: 12px 30px;
    border: none;
    cursor: pointer;
    border-radius: 30px;
    font-size: 16px;
    font-weight: bold;
    transition: all 0.3s ease-in-out;
    box-shadow: 0px 4px 10px rgba(255, 103, 27, 0.3);
    text-transform: uppercase;
    outline: none;
    position: relative;
    overflow: hidden;
}

/* Hover & Click Effects */
.place-order-btn:hover {
    background: linear-gradient(135deg, #ff4500, #ff671b);
    transform: scale(1.08);
    box-shadow: 0px 5px 15px rgba(255, 103, 27, 0.5);
}

.place-order-btn:active {
    transform: scale(0.98);
    box-shadow: 0px 2px 8px rgba(255, 103, 27, 0.2);
}

    </style>
</head>
<body>

<div class="checkout-container">
   <h2>Checkout</h2>

    <?php if (!empty($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <!-- Checkout Form -->
    <form method="post" id="checkout-form">
        <input type="text" name="name" placeholder="Full Name" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="text" name="address" placeholder="Address" required><br>
    </form>

    <!-- Cart Items -->
    <?php if (!empty($_SESSION['cart'])): ?>
        <div class="cart-items">
            <h3>Your Items</h3>
            <?php foreach ($_SESSION['cart'] as $product): ?>
                <div class="cart-item">
                    <?php echo $product; ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>Your cart is empty.</p>
    <?php endif; ?>
</div>

<!-- Checkout Footer -->
<div class="checkout-footer">
    <p class="bill-details" >Total Amount: Rs. <?php echo number_format($totalAmount, 2); ?> PKR</p>
    <button type="submit" class="place-order-btn" form="checkout-form">Place Order</button>
</div>

</body>
</html>
