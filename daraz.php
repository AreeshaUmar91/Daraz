
<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? "";
    $email = $_POST['email'] ?? "";
    $password = $_POST['password'] ?? "";
    
    // Basic validation
    if (!empty($username) && !empty($email) && !empty($password)) {
        $_SESSION['username'] = htmlspecialchars($username);
        $_SESSION['email'] = htmlspecialchars($email);

        header("Location: all.php"); // Redirect to all.php after login
        exit();
    } else {
        $error = "All fields are required!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daraz Clone - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            font-family: 'Times New Roman', serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url('darazlogin.jpg') no-repeat center;
            background-size: cover;
        }

        .login-wrapper {
    background: white;
    border-radius: 10px;
    padding-right: 0px;
    box-shadow: 0px 0px 10px 5px white;
    border: 2px solid black;
    max-width: 750px;
    width: 690px;
    height: 430px;
    margin-right: 300px;
    
    /* Animation */
    transform: scale(0.95);
    opacity: 0;
    transition: transform 0.5s ease-in-out, opacity 0.5s ease-in-out, box-shadow 0.5s ease-in-out;
}

/* When the page loads, fade in the form */
.login-wrapper.show {
    transform: scale(1);
    opacity: 1;
}

/* Hover effect for a glowing shadow */
.login-wrapper:hover {
    box-shadow: 0px 0px 15px 8px rgba(255, 120, 29, 0.8);
    transform: scale(1.02);
}

        .login-container {
            text-align: left;
            padding-left: 110px;
            width: 680px;
         /*   border: 2px solid black; */
            height: 420px;
            padding-top: 10px;
        }

        .input-group {
            position: relative;
            width: 80%;
            margin-bottom: 15px;
        }

        .input-group input {
            width: 600px;
            border-radius: 0px;
            border: 1px solid black;
            font-size: 16px;
            height: 40px;
            padding-left: 40px;
            padding-right: 40px;
        }

        .input-group .icon {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            font-size: 18px;
            color: gray;
        }

        .input-group .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 18px;
            color: gray;
        }

        button {
            font-size: 20px;
            font-weight: bold;
            width: 80%;
            border-radius: 10px;
            border: 1px solid black;
            background: rgb(255, 120, 29);
            color: white;
            height: 40px;
        }

        button:hover {
            background: white;
            color: rgb(255, 120, 29);
        }

        .logo {
            position: fixed;
            top: 40px;
            left: 30px;
            width: 150px;
            height: auto;
            z-index: 1000;
        }
        .osp{
            position: absolute; 
            top: 20px; 
            left: 50%;
             transform: translateX(-50%);
              display: flex;
               align-items: center; 
               background-color: transparent;
        }
        .lpf{
            position: absolute; 
            bottom: 20px; 
            left: 50%;
             transform: translateX(-50%); 
             display: flex;
              justify-content: center;
               align-items: center; 
               gap: 30px;
        }
        .mobile-image{
        height: 450px;
        }
    </style>
</head>
<body>
    <div class="osp"  >
        <img  src="osp.png" alt="OSP Logo" style="width: 500px; height: auto; margin-right: 10px;">
    </div>


    <div class="lpf" >
        <img src="images/lpf1.webp" alt="Left Image" style="width: 160px; height: auto;">
        <img src="images/lpf2.png" alt="Right Image" style="width: 170px; height: auto;">
    </div>



    <img src="images/darazlogowhite.png" alt="Daraz Logo" class="logo">
    


    <div class="container" style=" margin-top: 70px; ">
        <div class="row justify-content-center align-items-center" >
            <div class="col-md-4 d-flex justify-content-left order-md-1 order-2"  style=" width: 300px;" >
                <img src="images/darazmblpic.png" alt="Daraz Mobile App" class="mobile-image">
            </div>
            <div class="col-md-6 login-wrapper order-md-2 order-1"   >
                <div class="login-container">
                    <h2 style="font-weight: bold;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Customer Login</h2> <br>
                    <?php if (!empty($error)): ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php endif; ?>
                    <form action="daraz.php" method="POST">
                        <label for="username" style="font-weight: bold; font-size: 20px;">UserName:</label>
                        <div class="input-group">
                            <i class="fa fa-user icon"></i>
                            <input type="text" id="username" name="username" placeholder="Enter your username" required>
                        </div>
                        <label for="email" style="font-weight: bold; font-size: 20px;">E-mail:</label>
                        <div class="input-group">
                            <i class="fa fa-envelope icon"></i>
                            <input type="email" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <label for="password" style="font-weight: bold; font-size: 20px;">Password:</label>
                        <div class="input-group">
                            <i class="fa fa-lock icon"></i>
                            <input type="password" id="password" name="password" placeholder="Enter your password" required>
                            <i class="fa fa-eye toggle-password" id="togglePassword"></i>
                        </div>
                      <br>  <button type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        const togglePassword = document.getElementById("togglePassword");
        const passwordField = document.getElementById("password");

        togglePassword.addEventListener("click", function () {
            if (passwordField.type === "password") {
                passwordField.type = "text";
                togglePassword.classList.remove("fa-eye");
                togglePassword.classList.add("fa-eye-slash");
            } else {
                passwordField.type = "password";
                togglePassword.classList.remove("fa-eye-slash");
                togglePassword.classList.add("fa-eye");
            }
        });
    </script>


<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelector(".login-wrapper").classList.add("show");
});
</script>
</body>
</html>