<?php
session_start();
$name = isset($_SESSION['order_name']) ? $_SESSION['order_name'] : "Customer";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            text-align: center;
            padding: 50px;
        }
        .success-container {
            max-width: 400px;
            margin: auto;
            background: linear-gradient(135deg, #F85606, #D14200);
            color: white;
            padding: 25px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.6s ease-in-out;
        }
        .success-container h2 {
            font-size: 24px;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .success-container p {
            font-size: 16px;
            margin-bottom: 15px;
        }
        .continue-btn {
            background-color: white;
            color: #F85606;
            padding: 12px 24px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
            transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
        }
        .continue-btn:hover {
            background-color: #f8f9fa;
            color: #D14200;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.95); }
            to { opacity: 1; transform: scale(1); }
        }
    </style>
</head>
<body>

<div class="success-container">
    <h2>Thank you, <?php echo htmlspecialchars($name); ?>!</h2>
    <p>Your order has been placed successfully.</p>
    <p>You will receive your order within 4 to 5 working days.</p>
    <a href="all.php" class="continue-btn">Continue Shopping</a>
</div>

</body>
</html>
