<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        .container {
         
            max-width: 1250px;
            background: white;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
            margin-top: 30px;
            padding: 20px;
            flex-grow: 1;
            margin-bottom: 100px;
        }
        .header {
            background: #ff6600;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 22px;
            font-weight: bold;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 30px;
        }
        .coldiv {
            width: 220px;
            height: 350px;
            margin: 10px;
            padding: 10px;
            background-color: white;
            position: relative;
            box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            border-radius: 5px;
        }
        .img2 {
            height: 180px;
            width: 100%;
            object-fit: contain;
            border-radius: 5px;
        }
        .remove-btn, .buy-now-btn {
            color: white;
            font-size: 14px;
            cursor: pointer;
            padding: 8px;
            width: 100%;
            border: none;
            border-radius: 5px;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }
        .remove-btn {
            background: #dc3545;
            bottom: 10px;
        }
        .remove-btn:hover {
            background: #c82333;
        }
        .buy-now-btn {
            background: #28a745;
            bottom: 50px;
        }
        .buy-now-btn:hover {
            background: #218838;
        }
        .footer {
            background: #343a40;
            color: white;
            text-align: center;
            padding: 15px;
            position: fixed;
            bottom: 0;
            width: 100%;
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        .footer a {
            text-decoration: none;
            background: #ff6600;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            transition: 0.3s ease;
            font-weight: bold;
        }
        .footer a:hover {
            background: #ff6600;
        }
    </style>
</head>
<body>

<div class="header">My Store Products</div>

<div class="container mt-4">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5" id="storeProducts"></div>
</div>

<footer class="footer">
    <a href="all.php">Go to Home</a>
    <a href="suggested.php">Add more products</a>
    <a href="all.php" onclick="logout(); return false;">Logout</a>
</footer>

<script>
    function loadStoreProducts() {
        let storedProducts = JSON.parse(localStorage.getItem("storeProducts")) || [];
        let productList = document.getElementById("storeProducts");

        productList.innerHTML = storedProducts.length === 0 ? 
            "<p class='text-muted'>No products added to your store yet.</p>" : "";

        storedProducts.forEach((product, index) => {
            let stars = "★".repeat(product.rating) + "☆".repeat(5 - product.rating);
            let productItem = `<div class='col coldiv'>
                <img class='img2' src="${product.image}" alt="${product.name}">
                <p>${product.name} <br>
                    <span class='price' style='color: #fe8e00;'> Rs. ${product.price} PKR</span><br>
                    <span>${product.sold} sold </span><br>
                    <span class='star' style='font-size: 20px; color: gold;'>${stars}</span>
                </p>
                <button class="buy-now-btn" onclick="addToCart('${product.name}', '${product.price}', '${product.image}', '${product.sold}', '${product.rating}')">Buy Now</button>
                <button class="remove-btn" onclick="removeFromStore(${index})">Remove</button>
            </div>`;

            productList.innerHTML += productItem;
        });
    }

   

    function removeFromStore(index) {
        let storedProducts = JSON.parse(localStorage.getItem("storeProducts")) || [];
        storedProducts.splice(index, 1);
        localStorage.setItem("storeProducts", JSON.stringify(storedProducts));
        loadStoreProducts();
    }


 
    function addToCart(name, price, image, sold, rating) {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];

    console.log("Cart before adding:", cart); // Debugging line

    let productIndex = cart.findIndex(item => item.name === name);

    if (productIndex !== -1) {
        cart[productIndex].quantity += 1;  // Increase quantity if already in cart
    } else {
        cart.push({
            name: name,
            price: parseFloat(price),  // Ensure price is a number
            image: image,
            sold: sold,
            rating: rating,
            quantity: 1
        });
    }

    localStorage.setItem("cart", JSON.stringify(cart));

    console.log("Cart after adding:", cart); // Debugging line
    showMessage("Product added to cart!");
}



    function showMessage(message) {
        let messageDiv = document.createElement("div");
        messageDiv.innerHTML = message;
        messageDiv.style.position = "fixed";
        messageDiv.style.top = "50%";
        messageDiv.style.left = "50%";
        messageDiv.style.transform = "translate(-50%, -50%)";
        messageDiv.style.backgroundColor = "#4CAF50";
        messageDiv.style.color = "white";
        messageDiv.style.fontSize = "20px";
        messageDiv.style.padding = "15px";
        messageDiv.style.borderRadius = "8px";
        messageDiv.style.zIndex = "9999";
        messageDiv.style.textAlign = "center";
        document.body.appendChild(messageDiv);

        setTimeout(() => document.body.removeChild(messageDiv), 2000);
    }



    function logout() {
        localStorage.clear();
        localStorage.setItem('fromLogout', 'true');
        window.location.href = 'all.php';
    }

    window.onload = loadStoreProducts;
</script>

</body>
</html>
