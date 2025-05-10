<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suggested Products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .container {
        
            height: 4580px;
            width: 1250px;
            background: white;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
            margin-top: 30px;
            margin-bottom: 60px;
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
            width: 230px;
            height: 330px;
            margin: 6px;
            padding: 10px;
            background-color: white;
            position: relative;
            padding-bottom: 40px;
            cursor: pointer;
            box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            border-radius: 5px;
        }
        .img2 {
            height: 200px;
            width: 100%;
            object-fit: contain;
            border-radius: 5px;
        }
        .buy-btn {
            background: #ff6600;
            color: white;
            font-size: 16px;
            cursor: pointer;
            padding: 8px;
            width: 100%;
            border: none;
            border-radius: 5px;
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
        }
        .buy-btn:hover {
            background: #e65c00;
        }
        footer {
            background: #343a40;
            color: white;
            text-align: center;
            padding: 8px;
            position: fixed;
            width: 100%;
            bottom: 0;
            left: 0;
          
        }
        .store-btn {
            background: #28a745;
            color: white;
            font-size: 16px;
            cursor: pointer;
            padding: 10px;
            width: 200px;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .store-btn:hover {
            background: #218838;
        }


        /* Floating message styling */
.floating-message {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #28a745;
    color: white;
    padding: 15px 25px;
    font-size: 18px;
    font-weight: bold;
    border-radius: 8px;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
    text-align: center;
    z-index: 1000;
    opacity: 0;
    animation: fadeIn 0.5s ease-in-out forwards, fadeOut 0.5s ease-out 1.5s forwards;
}

/* Fade-in and fade-out animations */
@keyframes fadeIn {
    from { opacity: 0; transform: translate(-50%, -60%); }
    to { opacity: 1; transform: translate(-50%, -50%); }
}

@keyframes fadeOut {
    from { opacity: 1; transform: translate(-50%, -50%); }
    to { opacity: 0; transform: translate(-50%, -40%); }
}

    </style>
</head>
<body>
    <div class="header">Suggested Products for Your Store</div>
    <div class="container mt-4">
        <div class="row" id="suggestedProducts"></div>
    
    </div>
    <footer>
    <button class="store-btn" onclick="goToStore()">Go to Store</button> 
        <p>&copy; 2025 Reseller Portal | Powered by Tayyaba</p>
        
    </footer>
    <script>
        let suggestedProducts = [
            { name: "TOP Quality Blue Co-Ord Set", price: "1299", image: "w1.webp", sold: 125, rating: 4 },
            { name: "Hard Cricket ball", price: "800", image: "s1.webp", sold: 300, rating: 3 },
            { name: "Pink chain shoulder bag", price: "1800", image: "bag6.webp", sold: 420, rating: 5 },
            { name: "Pet's Chains and Sunglasses", price: "605", image: "p6.webp", sold: 62, rating: 3 },
            { name: "Black & White Lipstick", price: "750", image: "beauty6.webp", sold: 134, rating: 3 },
            { name: "Unique Portable Power Strip", price: "1500", image: "e6.webp", sold: 121, rating: 4 },
            { name: "Pearl Butterfly Choker", price: "670", image: "j6.webp", sold: 125, rating: 5 },
            { name: "Perfume & Body Spray Set", price: "1599", image: "men6.webp", sold: 52, rating: 3 },
            { name: "Colorful Clay Set", price: "300", image: "toy6.webp", sold: 370, rating: 2 },
            { name: "White Baby Bodysuit", price: "1000", image: "kids10.webp", sold: 125, rating: 2 },
            { name: "Matte Nude Lipstick", price: "500", image: "beauty10.webp", sold: 88, rating: 1 },
            { name: "Red Pet Bow", price: "60", image: "p8.webp", sold: 157, rating: 2 },
            { name: "Pink Floral T-shirt", price: "497", image: "w5.webp", sold: 102, rating: 5 },
            { name: "Shuttlecocks Set", price: "700", image: "s6.webp", sold: 125, rating: 5 },
            { name: "Leather Shoulder Bag", price: "2500", image: "bag11.webp", sold: 509, rating: 5 },
            { name: "New Electric Coil Stove", price: "2500", image: "e10.webp", sold: 99, rating: 2 },
            { name: "Pet Scarf with Pom-Poms", price: "110", image: "p11.webp", sold: 199, rating: 3 },
            { name: "Makeup Palette Box", price: "2500", image: "beauty12.webp", sold: 67, rating: 2 },
            { name: "Stylish Black Sunglasses", price: "650", image: "men12.webp", sold: 48, rating: 3 },
            { name: "Crystal Pendant Set", price: "640", image: "j12.webp", sold: 420, rating: 4 },
            { name: "Pink Teddy Bear", price: "900", image: "toy11.webp", sold: 115, rating: 4 },
            { name: "Girls Stylish Winter Staller", price: "582", image: "w7.webp", sold: 56, rating: 3 },
            { name: "Mini Quilted Purses", price: "1290", image: "bag15.webp", sold: 341, rating: 4 },
            { name: "Portable Room Heater", price: "4500", image: "e16.webp", sold: 127, rating: 4 },
            { name: "Monster Truck Toy", price: "199", image: "toy19.webp", sold: 150, rating: 3 },
            { name: "Cat Plush Toys", price: "249", image: "p21.webp", sold: 102, rating: 5 },
            { name: "Gold Plated Bracelet", price: "480", image: "j26.webp", sold: 290, rating: 2 },
            { name: "Mikasa Volleyball", price: "1590", image: "s17.webp", sold: 460, rating: 2 },
            { name: "Kashmiri Shawl For Men", price: "899", image: "men23.webp", sold: 89, rating: 4 },
            { name: "Girls' Orange Co-ord Set", price: "1440", image: "w26.webp", sold: 50, rating: 2 },
            { name: "Electric Food Chopper", price: "1200", image: "e22.webp", sold: 88, rating: 3 },
            { name: "Pink Shoulder Pouch", price: "1550", image: "bag19.webp", sold: 472, rating: 4 },
            { name: "Blue Hair Bow", price: "290", image: "j33.webp", sold: 125, rating: 2 },
            { name: "Shuttlecock", price: "570", image: "s22.webp", sold: 289, rating: 3 },
            { name: "Baby Shoes with Ribbons", price: "400", image: "kids15.webp", sold: 100, rating: 1 },
            { name: "TOP Quality Sunglasses", price: "760", image: "w42.webp", sold: 150, rating: 4 },
            { name: "New Trendy Black Shades", price: "695", image: "men31.webp", sold: 82, rating: 3 },
            { name: "Makeup Palette Kit", price: "1200", image: "beauty20.webp", sold: 115, rating: 3 },
            { name: "Colorful Loom Bands", price: "600", image: "toy27.webp", sold: 110, rating: 3 },
            { name: "Pet Bow Ties", price: "250", image: "p41.webp", sold: 220, rating: 4 },
            { name: "Pink Frock Trendy", price: "760", image: "kids50.webp", sold: 230, rating: 5 },
            { name: "Sports Gloves", price: "680", image: "s50.webp", sold: 290, rating: 3 },
            { name: "Hand Chain Bracelet", price: "320", image: "j50.webp", sold: 97, rating: 2 },
            { name: "Diecast Toy Cars", price: "480", image: "toy50.webp", sold: 199, rating: 4 },
            { name: "Pet Leash Set", price: "950", image: "p50.webp", sold: 25, rating: 3 },
            { name: "Trendy Lipstick Organizer", price: "700", image: "beauty48.webp", sold: 127, rating: 5 },
            { name: "Colorful Mini Bags Set", price: "1050", image: "bag29.webp", sold: 295, rating: 2 },
            { name: "Premium Fragrance For Boys", price: "980", image: "men50.webp", sold: 80, rating: 3 },
            { name: "Mini Electric Kettle", price: "2000", image: "e33.webp", sold: 68, rating: 2 },
            { name: "100% Pure TOP Quality Frock", price: "950", image: "w50.webp", sold: 16, rating: 3 },
            { name: "Barbie Sweet Shirt", price: "745", image: "kids45.webp", sold: 267, rating: 2 },
            { name: "Table Tennis Net", price: "1000", image: "s45.webp", sold: 12, rating: 1 },
            { name: "Colorful Butterfly Bracelet", price: "640", image: "j45.webp", sold: 392, rating: 4 },
            { name: "Pet Tiaras", price: "200", image: "p45.webp", sold: 105, rating: 3 },
            { name: "Animal Figurine Set", price: "1600", image: "toy45.webp", sold: 55, rating: 4 },
            { name: "Soft Women's Slippers", price: "690", image: "w45.webp", sold: 40, rating: 3 },
            { name: "Fashionable Trendy Glasses", price: "759", image: "men45.webp", sold: 73, rating: 4 },
            { name: "New Glitter Eyeshadow", price: "1350", image: "beauty43.webp", sold: 135, rating: 5 },
            { name: "Pink Handbag Set", price: "1930", image: "bag35.webp", sold: 65, rating: 1 },
            { name: "Electric Body Massager", price: "1500", image: "e45.webp", sold: 86, rating: 4 },

        ];

        function loadSuggestedProducts() {
            let productList = document.getElementById('suggestedProducts');
            productList.innerHTML = '';
            let rowContent = '';
            
            suggestedProducts.forEach((product, index) => {
                let stars = '★'.repeat(product.rating) + '☆'.repeat(5 - product.rating);
                let productItem = `<div class='col-lg-2 col-md-5 col-sm-5 coldiv'>
                    <img class='img2' src="${product.image}" alt="${product.name}">
                    <p>${product.name} <br>
                        <span class='price' style='color: #fe8e00;'> Rs. ${product.price} PKR</span><br>
                        <span>${product.sold} sold </span><br>
                        <span class='star' style='font-size: 20px; color: gold;'>${stars}</span> 
                        <span class='sold'>(22)</span>
                    </p>
                    <button class="buy-btn" onclick="addToStore(${index})">Add to Store</button>
                </div>`;
                
                rowContent += productItem;
                
                if ((index + 1) % 5 === 0 || index === suggestedProducts.length - 1) {
                    productList.innerHTML += `<div class="row">${rowContent}</div>`;
                    rowContent = '';
                }
            });
            document.getElementById('storeButtonContainer').innerHTML = '<button class="store-btn" onclick="goToStore()">Go to Store</button>';
        }
   
     

        window.onload = loadSuggestedProducts;
    </script>
    <script>
function addToStore(index) {
    let storedProducts = JSON.parse(localStorage.getItem('storeProducts')) || [];
    let productToAdd = suggestedProducts[index];

    // Check if the product is already in the store
    let exists = storedProducts.some(product => product.name === productToAdd.name);

    let messageBox = document.createElement('div');
    messageBox.className = 'floating-message';

    if (!exists) {
        storedProducts.push(productToAdd);
        localStorage.setItem('storeProducts', JSON.stringify(storedProducts));
        messageBox.innerText = `${productToAdd.name} has been added to your store!`;
        messageBox.style.backgroundColor = "#28a745"; // Green for success
    } else {
        messageBox.innerText = `${productToAdd.name} is already in your store!`;
        messageBox.style.backgroundColor = "#dc3545"; // Red for warning
    }

    document.body.appendChild(messageBox);

    // Remove message after 2 seconds
    setTimeout(() => {
        messageBox.remove();
    }, 2000);
}

    function goToStore() {
        window.location.href = "store.php";
    }
</script>





</body>
</html>