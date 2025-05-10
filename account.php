<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: daraz.php");
    exit();
}

$username = htmlspecialchars($_SESSION['username']);
$email = htmlspecialchars($_SESSION['email']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account - Daraz Style</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }
        .account-container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            max-width: 1400px;
            margin: 50px auto;
        }
        .profile-header {
            display: flex;
            align-items: center;
            gap: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid #ddd;
        }
        .profile-header img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 3px solid #ff6600;
        }
        .profile-header h4 {
            margin: 0;
            font-weight: bold;
            color: #333;
            font-size: 22px;
        }
        .profile-header p {
            margin: 5px 0 0;
            font-size: 16px;
            color: gray;
        }
        .my-orders-text {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            padding-bottom: 10px;
          
            display: inline-block;
            margin-left: 15px;
        }
        .order-section {
            display: flex;
            justify-content: space-between;
            padding: 20px 0;
        }
        .order-item {
            text-align: center;
            font-size: 16px;
            color: #333;
            flex: 1;
        }
        .order-item i {
            font-size: 45px;
            color: #ff6600 !important;
            display: block;
            margin: 0 auto 8px;
        }
        .card-section {
            display: flex;
            gap: 15px;
            margin-top: 15px;
            height: 150px;
        }
        .card-custom {
            flex: 1;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            font-size: 16px;
        }
        .daraz-coins {
            background: #fffae6;
            border: 2px solid #ffcc00;
            font-weight: bold;
        }
        .daraz-candy {
            background: #ffeeff;
            border: 2px solid #ff66b2;
            font-weight: bold;
        }
        .wallet-title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        .wallet-section {
            display: flex;
            gap: 10px;
            justify-content: space-between;
            padding-top: 15px;
            border-top: 2px solid #ddd;
        }
        .wallet-box {
            flex: 1;
            background: #f9f9f9;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            font-size: 16px;
            height: 100px;
        }
        .wallet-box a {
            color: #ff6600;
            font-weight: bold;
        }
        .quick-links {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding-top: 20px;
        }
        .quick-link {
            flex: 1 1 30%;
            text-align: center;
            padding: 10px;
            font-size: 14px;
            color: #333;
        }
        .quick-link i {
            font-size: 35px;
            color: #ff6600;
            display: block;
            margin-bottom: 5px;
        }
        .btn-orange {
            background: #ff6600;
            color: white;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 5px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="account-container">
    <div class="profile-header">
            <img src="emoji.png" alt="Profile Pic">
            <div>
                <h4><?php echo $username; ?></h4>
                <p><?php echo $email; ?></p>
            </div>
        </div>

        <!-- My Orders Title -->
        <p class="my-orders-text">My Orders</p>

        <!-- Orders Section -->
        <div class="order-section">
            <div class="order-item">
                <i style="font-size: 40px; color: #ff6600;" class="fas fa-wallet"></i>
                <div>To Pay</div>
            </div>
            <div class="order-item">
                <i style="font-size: 40px; color: #ff6600;" class="fas fa-box"></i>
                <div>To Ship</div>
            </div>
            <div class="order-item">
                <i style="font-size: 40px; color: #ff6600;" class="fas fa-truck"></i>
                <div>To Receive</div>
            </div>
            <div class="order-item">
                <i style="font-size: 40px; color: #ff6600;" class="fas fa-comment-alt"></i>
                <div>To Review</div>
            </div>
            <div class="order-item">
                <i style="font-size: 40px; color: #ff6600;" class="fas fa-undo"></i>
                <div>Returns</div>
            </div>
        </div>
        
        <!-- Daraz Coins & Candy -->
        <!-- Daraz Coins & Candy -->
<div class="card-section">
    <!-- Daraz Coins Card -->
    <div class="card-custom daraz-coins p-3 d-flex align-items-center position-relative">
        <span class="position-absolute top-0 start-0 p-2 fw-bold text-dark" >Daraz Coins</span>
        <img src="images/darazcoins.jpg" alt="Daraz Coins" class="img-fluid me-3" style="width: 100px; height: 70px; border-radius: 10px;">
        <div class="flex-grow-1">
            <div class="fw-bold">Check-in to earn <span class="text-danger">1437 Coins</span></div>
            <button class="btn btn-warning mt-2 d-block mx-auto" style="width: 150px;">Collect</button>
        </div>
    </div>
    <div class="card-custom daraz-coins p-3 d-flex align-items-center position-relative">
        <span class="position-absolute top-0 start-0 p-2 fw-bold text-dark">Daraz Candy</span>
        <img src="images/darazcandy.jpg" alt="Daraz Candy" class="img-fluid me-3" style="width: 100px; height: 70px;border-radius: 10px;">
        <div class="flex-grow-1">
            <div class="fw-bold">Play & win Coins to get <span class="text-danger">discounts!</span></div>
            <button class="btn btn-warning mt-2 d-block mx-auto"  style="width: 150px;">Play</button>
        </div>
    </div>

   
</div>

        
        <!-- Wallet Section -->
        <p class="wallet-title">Daraz Wallet</p>
        <div class="wallet-section">
            <div class="wallet-box">
                <div>Daraz Wallet</div>
                <strong>0</strong>
                <br>
                
            </div>
            <div class="wallet-box">
                <div>Payment Options</div>
                <strong>0</strong>
            </div>
        </div>

        <!-- Quick Links Section -->
        <div class="quick-links">
            <div class="quick-link">
                <i style="font-size: 28px;" class="fas fa-envelope"></i>
               <div>My Messages</div>
            </div>
            <div class="quick-link">
                <i style="font-size: 28px;" class="fas fa-shopping-cart"></i>
               <div>Buy Any 3</div> 
            </div>
            <div class="quick-link">
                <i style="font-size: 28px;" class="fas fa-tshirt"></i>
               <div>DarazLook</div> 
            </div>
            <div class="quick-link">
                <i style="font-size: 28px;" class="fas fa-users"></i>
               <div>My Affiliates</div> 
            </div>
            <div class="quick-link">
                <i style="font-size: 28px;" class="fas fa-question-circle"></i>
               <div> Help Center</div>
            </div>
            <div class="quick-link">
                <i style="font-size: 28px;" class="fas fa-headset"></i>
               <div>Contact Customer Care</div> 
            </div>
            <div class="quick-link">
                <i style="font-size: 28px;" class="fas fa-star"></i>
               <div>My Reviews</div> 
            </div>
        </div>

        <!-- Logout Button -->
        <form action="logout.php" method="POST" style="margin-top: 20px;">
            <button type="submit" class="btn-orange">Logout</button>
        </form>
    </div>
</body>
</html>
