<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   

    <title>Daraz Clone</title>
    <style>
        .body{
           /* border: 2px solid black;*/
            font-family: Serif;
            padding-top: 160px;
        }
        header{
            position: fixed;
            z-index: 1000;
            top: 0;
            left: 0;
            width: 100%;
            background: #ff5400; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
       }
        .div1{
            height: 40px;
          /* border: 2px solid black; */
            text-align: right;
            padding-top: 10px;
            padding-right: 30px;
            background: #ff5400e6;
            font-family: Serif;
            font-size: 16px;
        }
        .a1{
             text-decoration: none;
             margin: 20px;
             color: white;
             font-size: 18px;
             font-weight: bold;
             position: relative;
             transition: color 0.3s ease-in-out;
       }
       .a1:hover {
             color: #ffcc00; 
             text-shadow: 0px 0px 10px rgba(255, 204, 0, 0.8);
       }
        .a1::after {
             content: "";
             position: absolute;
             left: 50%;
             bottom: -2px;
             width: 0;
             height: 3px;
             background-color: #ffcc00;
             transition: all 0.3s ease-in-out;
       }

        .a1:hover::after {
              width: 100%;
              left: 0;
       }
        .div2{
             height: 70px;
         /* border: 2px solid black; */
             text-align: left;
             background: #ff5400e6;
             padding-left:240px;
             padding-top: 10px;
             font-family: Serif;
            
        }
        input {
             width: 650px;
             height: 40px;
            border: 2px solid #ddd; 
             padding-left: 40px;
             padding-right: 40px;
             text-align: left;
             margin-left: 50px;
             font-size: 16px;
             border-radius: 8px;
             outline: none;
             transition: all 0.3s ease-in-out;
             box-shadow: inset 2px 2px 5px rgba(0, 0, 0, 0.1); 
        }


        input:hover {
          border-color: #ff5400; 
          box-shadow: 0 0 10px rgba(255, 84, 0, 0.4); 
        }


        input:focus {
          border-color: #ff5400;
          box-shadow: 0 0 15px rgba(255, 84, 0, 0.5);
          background-color: #fffaf0;
        }
       
        .div3{
          /*  border: 2px solid black;*/
            height: 40px;
            background: #ff5400e6;
            font-family: Serif;
            font-size: 20px;
        }
        .btn1 {
            height: 35px;
            width: 120px;
            margin: 0 8px;
            background: #ff5400e6;
            color: white;
            border: none;
            font-weight: bold;
            cursor: pointer;
            position: relative;
            transition: color 0.3s, border-bottom 0.3s;
        }

   
        .btn1:hover {
             background: linear-gradient(135deg, #ff7900, #ff5400);
             transform: scale(1.05); 
             box-shadow: 0 6px 12px rgba(255, 84, 0, 0.3); 
        }


        .btn1::after {
             content: "";
             position: absolute;
             left: 0;
             bottom: 0;
             width: 100%;
             height: 3px;
             background-color: white;
             transform: scaleX(0);
             transition: transform 0.3s ease-in-out;
        }


        .btn1:hover::after {
               transform: scaleX(1);
        }

        .swiper {
            width: 70%;
            height: 400px;
           
            overflow: hidden;
        }
        .swiper-slide {
            display: center;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: bold;
            color: white;
           
            
        }
           .img1{
            width: 100%;
            height:400px;
            
        }
        .swiper-button-next,
        .swiper-button-prev {
            color: white; 
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 50%;
            transition: 0.3s;
        }
        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background: rgba(0, 0, 0, 0.8);
        }
        .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            background-color: gray;
            opacity: 0.6;
            margin: 5px;
        }
        .swiper-pagination-bullet-active {
            background-color: white;
            opacity: 1;


             background: #ff5400;
             border: 2px solid white; 
             transform: scale(1.2);
       } 

       .coldiv{
          /*  border:2px solid black; */
            width:230px;
            height: 330px;
            margin: 6px;
            padding: 10px;
            background-color:white;
            position: relative;
            padding-bottom: 40px;
            cursor: pointer;
        }
        .coldiv:hover{
            box-shadow: 0px 0px 5px 5px rgba(170, 161, 151, 0.89);
        } 
        .rowdiv{
            height:360px;
            padding:5px 16px; 
           /* border: 2px solid black;*/
            margin-top: 30px;
        }
        
        .img2{
            height:200px;
            width:100%;
        }
  
        .buy-btn {
          position: absolute;
          bottom: 10px;
          right: 10px;
          background-color: #fe8e00;
          color: white;
          border: none;
          padding: 3px 8px;
          font-size: 12px; 
          cursor: pointer;
          border-radius: 4px;
        }
      
        .buy-btn:hover {
            background-color: #ff4500;
        }
       .fmd{
        /*   border: 2px solid black; */
            height: 350px; 
            position: relative;
             display: flex; 
             justify-content: center; 
             align-items: flex-start;
              padding-top: 32px;
              background: rgb(30, 30, 30);
          
       }  
       
       .ftmd{
           width: 92%; 
           display: flex;
            justify-content: space-between;
             align-items: flex-start; 
          background: rgb(30, 30, 30);
       }
       .a2{
           font-size: 20px; 
           margin-right: 3px;
       }
       .ftd{
         /*  border: 2px solid black; */
            height: 200px; 
            width: 24%;
            background: rgb(30, 30, 30);
       }
       .fimg{
           
           height:28px;
            width:44px;"
       }
       .fp{
           font-family: miui, system-ui, -apple-system, BlinkMacSystem;
           font-size: 13px;
           color: grey;
       }
       .fh{
           font-family:miui, system-ui, -apple-system, BlinkMacSystem;
           color: rgb(255, 255, 255);
       } 
       .imd{
           display: flex;
            justify-content: space-between; 
            margin-top: 50px; 
            gap: 20px; 
            width: 1300px;
          /*   border: 2px solid black; */
             background: rgb(30, 30, 30); 
       }
       .iid{
         /*  border: 2px solid black; */
            width: 400px; 
             display: flex; 
             flex-direction: column;
              align-items: flex-start;
               padding: 10px; 
               color: white;
               background: rgb(30, 30, 30);
       }
       .lbd{
           display: flex;
            justify-content: center; 
            align-items: center;
             gap: 15px; 
            /* border: 2px solid black; */
              padding: 10px;
              background: rgb(30, 30, 30);
              color: rgb(255, 255, 255);
       }
       .smid{
           display: flex;
            align-items: center;
           /*  border: 2px solid black; */
             height: 30px; 
             padding: 20px;
              gap: 26px;
       }
       .a3{
           color: grey;
       }
       .ci:hover {
   
              transform: scale(1.1);
              box-shadow: 0px 6px 15px rgba(255, 84, 0, 0.5);
       }


        .ci:active {
             transform: scale(0.95);
       }


        .ci i {
              font-size: 30px;
              color: white;
              transition: transform 0.3s ease-in-out;
       }


        .ci:hover i {
             transform: scale(1.2) rotate(10deg);
       }

        .col-lg-2 {
              border-radius: 10px; 
              overflow: hidden;
              box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2); 
              background-color: #f8f9fa;
              transition: transform 0.3s ease-in-out; 
       }

        .col-lg-2:hover {
               transform: scale(1.02); 
       }
    </style>
</head>
<body>

    <!-- header process -->
     
      <header>
       <div class="div1">
        <a class="a1" href="reseller.php">Account</a>
        <a class="a1" href="chat.php">Messages</a>
        <a class="a1" href="cart.php">Cart</a>
        <a class="a1" href="account.php">Profile</a>
       </div>
       <div class="div2">
                <img  style="width:150px;height:50px;"src="darazlogowhite.png" alt="darazlogo">
                <input type="text" id="searchbar" name="searchbar" placeholder="Search in Daraz">
                

<script>
    document.getElementById("searchbar").addEventListener("keypress", function(event) {
        if (event.key === "Enter") {  // Check if Enter key is pressed
            search();
        }
    });

    function search() {
        let query = document.getElementById("searchbar").value.toLowerCase().trim();
        
        if (query === "women section") {
            window.location.href = "women.php";
        } else if (query === "men section") {
            window.location.href = "men.php";
        } else if (query === "kids section") {
            window.location.href = "kids.php";
        } else if (query === "sports section") {
            window.location.href = "sports.php";
        } else if (query === "jewellry section") {
            window.location.href = "jewellry.php";
        } else if (query === "bags section") {
            window.location.href = "bags.php";
        } else if (query === "electronics section") {
            window.location.href = "electronics.php";
        } else if (query === "beauty section") {
            window.location.href = "beauty.php";
        } else if (query === "toy section") {
            window.location.href = "toy.php";
        }  else if (query === "pets section") {
            window.location.href = "pets.php";
        }else {
            alert("No matching section found!");
        }
    }
</script>
                <a class="ci" href="cart.php">
    <i style="margin-left: 40px; font-size: 30px; color: white;" class="fa-solid fa-cart-shopping"></i>
</a>
      </div>
      <div class="div3">
      <button class="btn1" style="margin-left:25px;" onclick="gotonextpage('all')">All</button>
      <button class="btn1" onclick="gotonextpage('women')">Women</button>
      <button class="btn1" onclick="gotonextpage('men')">Men</button>
      <button class="btn1" onclick="gotonextpage('kids')">Kids</button>
      <button class="btn1" onclick="gotonextpage('sports')">Sports</button>
      <button class="btn1" onclick="gotonextpage('jewellry')">Jewellry</button>
      <button class="btn1" onclick="gotonextpage('bags')">Bags</button>
      <button class="btn1" onclick="gotonextpage('electronics')">Electronics</button>
      <button class="btn1" onclick="gotonextpage('beauty')">Beauty</button>
      <button class="btn1" onclick="gotonextpage('toy')">Toy</button>
      <button class="btn1" onclick="gotonextpage('pets')">Pets</button>
    </div>
<script>
    function gotonextpage(category) {
        window.location.href = category + ".php";
    }
</script>
     </header>
      
     
     
  
    <!-- Sweaper Slide Process -->
    <div class="container mt-4" style=" height:4500px;width: 1250px;  padding-top:160px; ">
    <div class="row" >
    <div class="col-lg-2 col-md-2 col-sm-2 " style="width: 80%; " >
    <div class="swiper mySwiper" style="width:100%;" >
   
        <div class="swiper-wrapper" >
            <div class="swiper-slide slide1"><img class="img1"  src="images/daraz1.jpg" alt="daraz1"></div>
            <div class="swiper-slide slide2"><img class="img1"  src="images/daraz2.jpg" alt="daraz2"></div>
            <div class="swiper-slide slide3"><img class="img1"  src="images/daraz3.jpg" alt="daraz3"></div>
            <div class="swiper-slide slide4"><img class="img1"  src="images/daraz4.jpg" alt="daraz4"></div>
            <div class="swiper-slide slide5"><img class="img1"  src="images/daraz5.jpg" alt="daraz5"></div>
            <div class="swiper-slide slide6"><img class="img1"  src="images/daraz6.jpg" alt="daraz6"></div>
            <div class="swiper-slide slide7"><img class="img1"  src="images/daraz7.jpg" alt="daraz7"></div>
            <div class="swiper-slide slide8"><img class="img1"  src="images/daraz8.jpg" alt="daraz8"></div>
            <div class="swiper-slide slide9"><img class="img1"  src="images/daraz9.jpg" alt="daraz9"></div>
            <div class="swiper-slide slide10"><img class="img1" src="images/daraz10.jpg" alt="daraz10"></div>
        </div> 
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-2 " style=" width:20%;">
        <img style="height:400px;width:100%;" src="images/sidepic.webp" alt="sidepic">
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true, 
            autoplay: {
                delay: 2500,  
                disableOnInteraction: false,  
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev", 
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>






      <!--next process-->
    
    <br>


         <div class="row rowdiv">
         <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/w1.webp" alt="women1">
            <p>TOP Quality Blue Co-Ord Set  <br><span class="price" style="color: #fe8e00;">  Rs. 1299 PKR</span><br> <span>125 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/w2.webp" alt="women2">
             <p> Women Fashion Block Heels  <br><span class="price" style="color: #fe8e00;">  Rs. 1348 PKR</span><br> <span>110 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(16)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/w3.webp" alt="women3">
             <p>TOP Quality Girls Scarves <br><span class="price" style="color: #fe8e00;">  Rs.602 PKR</span><br> <span>89 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(50)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/w4.webp" alt="women4">
             <p>Women Trendy Cotton Frock  <br><span class="price" style="color: #fe8e00;">  Rs.800 PKR</span><br> <span>95 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(34)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/w5.webp" alt="women5">
             <p>s Pink Floral T-shirt  <br><span class="price" style="color: #fe8e00;">  Rs. 497 PKR</span><br> <span>102 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(67)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
         </div>

        


         <div class="row rowdiv">
         <div class="col-lg-2 col-md-5 col-sm-5 coldiv"> <img class="img2" src="images/w6.webp" alt="women6">
         <p> Pink Bow Loafers For Girls <br><span class="price" style="color: #fe8e00;">  Rs. 1890 PKR</span><br> <span>75 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(20)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/w7.webp" alt="women7">
             <p>Girls Stylish Winter Staller <br><span class="price" style="color: #fe8e00;">  Rs. 582 PKR</span><br> <span>56 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(15)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/w8.webp" alt="women8">
             <p>Trendy Black Shirt with Skirt  <br><span class="price" style="color: #fe8e00;">  Rs. 899 PKR</span><br> <span>65 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(11)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/w9.webp" alt="women9">
             <p>Stylish Embroidered Jacket  <br><span class="price" style="color: #fe8e00;">  Rs. 1200 PKR</span><br> <span>70 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(33)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/w10.webp" alt="women10">
             <p> Pack of 5 Chiffon Hijab   <br><span class="price" style="color: #fe8e00;">  Rs. 788 PKR</span><br> <span>107 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(44)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
         </div>
        

 


         <div class="row rowdiv" >
         <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/w11.webp" alt="women11">
             <p> Red Fur Warm Slippers  <br><span class="price" style="color: #fe8e00;">  Rs. 489 PKR</span><br> <span>120 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(70)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/w12.webp" alt="women12">
             <p> Purple Cartoon T-shirt  <br><span class="price" style="color: #fe8e00;">  Rs. 460 PKR</span><br> <span>110 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(17)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/w13.webp" alt="women13">
             <p> Latest 3-Piece Abaya set   <br><span class="price" style="color: #fe8e00;">  Rs. 2800 PKR</span><br> <span>65 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(05)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/w14.webp" alt="women14">
             <p>  100% TOP Quality Scraves   <br><span class="price" style="color: #fe8e00;">  Rs. 599 PKR</span><br> <span>139 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(44)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/w15.webp" alt="women15">
             <p>  New Stylish Pink  Hoodie   <br><span class="price" style="color: #fe8e00;">  Rs. 800 PKR</span><br> <span>59 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(30)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
         </div>
        
        

         
         
         <div class="row rowdiv">
         <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/w16.webp" alt="women16">
             <p>  Comfortable Shoes For Girls  <br><span class="price" style="color: #fe8e00;">  Rs. 1540 PKR</span><br> <span>72 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(12)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/w17.webp" alt="women17">
             <p> Latest Summer Cap For Girls   <br><span class="price" style="color: #fe8e00;">  Rs. 350 PKR</span><br> <span>43 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(05)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/w18.webp" alt="women18">
             <p>  Women's Red Bow Tie Shirt   <br><span class="price" style="color: #fe8e00;">  Rs. 700 PKR</span><br> <span>97 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(29)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/w19.webp" alt="women19">
             <p> Luxuary Women's Sandals   <br><span class="price" style="color: #fe8e00;">  Rs. 2500 PKR</span><br> <span>130 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(80)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/w20.webp" alt="women20">
             <p>  Woolen Gloves For Girls  <br><span class="price" style="color: #fe8e00;">  Rs. 300 PKR</span><br> <span>100 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(39)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
         </div>
        
         
         <div class="row rowdiv" >
         <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/w21.webp" alt="women21">
             <p> Colorful Scarf Set For Girls <br><span class="price" style="color: #fe8e00;">  Rs. 1010 PKR</span><br> <span>125 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(70)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/w22.webp" alt="women22">
             <p>  Stylish Black Printed T-Shirt  <br><span class="price" style="color: #fe8e00;">  Rs. 602 PKR</span><br> <span>111 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(36)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/w23.webp" alt="women23">
             <p>  TOP Quality Denim Cap  <br><span class="price" style="color: #fe8e00;">  Rs. 189 PKR</span><br> <span>35 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(07)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/w24.webp" alt="women24">
             <p>  Best Quality Green Dupatta  <br><span class="price" style="color: #fe8e00;">  Rs. 700 PKR</span><br> <span>39 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(18)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/w25.webp" alt="women25">
             <p> Women's  House  Slippers <br><span class="price" style="color: #fe8e00;">  Rs. 405 PKR</span><br> <span>140 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(86)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
         </div>
         
         <div class="row rowdiv" >
         <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/w26.webp" alt="women26">
             <p>  Girls's Orange Co-ord Set  <br><span class="price" style="color: #fe8e00;">  Rs. 1440 PKR</span><br> <span>50 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(33)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/w27.webp" alt="women27">
             <p>  TOP Quality Blue Shawl  <br><span class="price" style="color: #fe8e00;">  Rs. 699 PKR</span><br> <span>99 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(66)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/w28.webp" alt="women28">
             <p> Embroidery Denim  Caps <br><span class="price" style="color: #fe8e00;">  Rs. 405 PKR</span><br> <span>77 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(28)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/w29.webp" alt="women29">
             <p>  Unique Girl's Jeans Jacket  <br><span class="price" style="color: #fe8e00;">  Rs. 1499 PKR</span><br> <span>102 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(72)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/w30.webp" alt="women30">
             <p>  Soft Women's Slippers <br><span class="price" style="color: #fe8e00;">  Rs. 899 PKR</span><br> <span>35 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(13)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
         </div>


         <div class="row rowdiv" >
         <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/w31.webp" alt="women31">
             <p>  100% TOP Quality T-Shirt    <br><span class="price" style="color: #fe8e00;">  Rs. 630 PKR</span><br> <span>10 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(04)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/w32.webp" alt="women32">
             <p>  Fashionable Girl's Sunglasses <br><span class="price" style="color: #fe8e00;">  Rs. 850 PKR</span><br> <span>160 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(100)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/w33.webp" alt="women33">
             <p> Fashionable  Light Pink Frock   <br><span class="price" style="color: #fe8e00;">  Rs. 1005 PKR</span><br> <span>90 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(47)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/w34.webp" alt="women34">
             <p>  TOP Quality Hijab Scraves  <br><span class="price" style="color: #fe8e00;">  Rs. 780 PKR</span><br> <span>112 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/w35.webp" alt="women35">
             <p>   Woolen Gloves For Girls   <br><span class="price" style="color: #fe8e00;">  Rs. 415 PKR</span><br> <span>44 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(16)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
         </div>
 
         <div class="row rowdiv" >
         <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/w36.webp" alt="women36">
             <p>Women's House Slippers<br><span class="price" style="color: #fe8e00;">  Rs.630 PKR</span><br> <span>107 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(55)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/w37.webp" alt="women37">
             <p>  Pure TOP Quality Socks <br><span class="price" style="color: #fe8e00;">  Rs. 315 PKR</span><br> <span>36 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(23)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/w38.webp" alt="women38">
             <p>  Stylish Girl's Lawn Dress <br><span class="price" style="color: #fe8e00;">  Rs. 2200 PKR</span><br> <span>17 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(06)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/w39.webp" alt="women39">
             <p>  Elegant Sandals For Women <br><span class="price" style="color: #fe8e00;">  Rs. 1600 PKR</span><br> <span>145 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(88)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/w40.webp" alt="women40">
             <p>  TOP Quality Sports Cap <br><span class="price" style="color: #fe8e00;">  Rs. 305 PKR</span><br> <span>56 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(16)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
         </div>


         <div class="row rowdiv" >
         <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/w41.webp" alt="women41">
             <p>  TOP Quality Hijab Stollers  <br><span class="price" style="color: #fe8e00;">  Rs. 655 PKR</span><br> <span>134 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/w42.webp" alt="women42">
             <p>  TOP Quality Sunglasses  <br><span class="price" style="color: #fe8e00;">  Rs. 760 PKR</span><br> <span>150 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(50)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/w43.webp" alt="women43">
             <p>  Stylish Western Dress  <br><span class="price" style="color: #fe8e00;">  Rs. 1699 PKR</span><br> <span>35 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(10)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/w44.webp" alt="women44">
             <p>  Woolen Gloves For Women  <br><span class="price" style="color: #fe8e00;">  Rs. 350 PKR</span><br> <span>15 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(02)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/w45.webp" alt="women45">
             <p>  Soft Women's Slippers   <br><span class="price" style="color: #fe8e00;">  Rs. 690 PKR</span><br> <span>40 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(19)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
         </div>



         <div class="row rowdiv" >
         <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/w46.webp" alt="women46">
             <p> Stylish Embroidery  Dress  <br><span class="price" style="color: #fe8e00;">  Rs. 1800 PKR</span><br> <span>62 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(31)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/w47.webp" alt="women47">
             <p>   TOP Quality Hijab Scraves  <br><span class="price" style="color: #fe8e00;">  Rs. 599 PKR</span><br> <span>37 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(11)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/w48.webp" alt="women48">
             <p>  New Stylish Socks <br><span class="price" style="color: #fe8e00;">  Rs. 299 PKR</span><br> <span>47 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(09)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/w49.webp" alt="women49">
             <p> Trendy Women Black Shoes  <br><span class="price" style="color: #fe8e00;">  Rs. 1769 PKR</span><br> <span>80 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(20)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/w50.webp" alt="women50">
             <p>  100% Pure TOP Quality Frock <br><span class="price" style="color: #fe8e00;">  Rs. 950 PKR</span><br> <span>16 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(04)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
         </div>
 
     </div>
 
 

     <script>
    function addToCartMessage(button) {
        // Clone the product div (.coldiv) before modifying it
        var productDiv = button.closest('.coldiv');
        var productCopy = productDiv.cloneNode(true); // Clone the entire product div

        if (productCopy) {
            // Remove the "Buy Now" button only in the copied version
            var buyNowButton = productCopy.querySelector('.buy-now-btn');
            if (buyNowButton) {
                buyNowButton.remove();
            }

            // Get the modified product HTML (without removing anything from women.php)
            var productHTML = productCopy.outerHTML;

            // Send the cleaned-up product data to cart.php via AJAX
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "cart.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    console.log("Added to cart.php");
                }
            };

            xhr.send("product=" + encodeURIComponent(productHTML));

            // Show success message
            var messageDiv = document.createElement("div");
            messageDiv.innerHTML = "Added to Cart Successfully!";
            messageDiv.style.position = "fixed";
            messageDiv.style.top = "50%";
            messageDiv.style.left = "50%";
            messageDiv.style.transform = "translate(-50%, -50%)";
            messageDiv.style.backgroundColor = "#4CAF50";
            messageDiv.style.color = "white";
            messageDiv.style.fontSize = "24px";
            messageDiv.style.padding = "20px 40px";
            messageDiv.style.borderRadius = "8px";
            messageDiv.style.zIndex = "9999";
            messageDiv.style.textAlign = "center";
            messageDiv.style.boxShadow = "0px 4px 10px rgba(0,0,0,0.2)";
            document.body.appendChild(messageDiv);

            // Remove message after 2 seconds
            setTimeout(function () {
                document.body.removeChild(messageDiv);
            }, 2000);
        }
    }
</script>


    <br><br>

<!-- Footer work -->

<div  class="fmd">
    <div class="ftmd">
        <div  class="ftd" >
         <h6 class="fh" >Company info</h6>
         <p  class="fp" > About Daraz <br>
          Affiliate & Influencer: Earn Commission <br>
          Contact us <br>
           Careers <br>
             Press <br>
                  Daraz's Tree Planting Program</p>
 
<div class="imd" >
  <div class="iid" >
    <h6 class="fh" style=" margin: 0 0 12px 0; white-space: nowrap;">Security certification</h6>    
    <div style="display: flex; gap: 5px; flex-wrap: wrap;">
      <img class="fimg" src="images/f1.webp" alt="">
      <img class="fimg" src="images/f2.webp" alt="">
      <img class="fimg" src="images/f3.webp" alt="">
      <img class="fimg" src="images/f4.webp" alt="">
      <img class="fimg" src="images/f5.webp" alt="">
      <img class="fimg" src="images/f6.webp" alt="">
      <img class="fimg" src="images/f7.webp" alt="">
    </div>
  </div>

  <div class="iid"  style="width: 550px;">
    <h6 class="fh" style="margin: 0 0 12px 0; white-space: nowrap;">We accept</h6>    
    <div style="display: flex; gap: 5px; flex-wrap: wrap;">
      <img class="fimg" src="images/f11.webp" alt="">
      <img class="fimg" src="images/f22.webp" alt="">
      <img class="fimg" src="images/f33.webp" alt="">
      <img class="fimg" src="images/f44.webp" alt="">
      <img class="fimg" src="images/f55.webp" alt="">
      <img class="fimg" src="images/f66.webp" alt="">
      <img class="fimg" src="images/f77.webp" alt="">
      <img class="fimg" src="images/f88.webp" alt="">
      <img class="fimg" src="images/f99.webp" alt="">
      <img class="fimg" src="images/f10.webp" alt="">
    </div>
  </div>
</div>
        </div>
        <div class="ftd" >
       <h6 class="fh"> Customer service</h6>
       <p class="fp" >
        Return and refund policy <br>
        Intellectual property policy <br>
        Shipping info <br>
        Report suspicious activity <br>
        </p>
        </div>
        <div class="ftd">
       <h6 class="fh">Help</h6>
       <p class="fp">
        Support center & FAQ <br>
        Safety center <br>
        Temu purchase protection <br>
        Sitemap <br>
        Partner with Temu 
        </p>
        </div>


        <div class="ftd"  >
       <h6 class="fh"> Download the Temu App </h6>
       <p class="fp">
       Price-drop alerts &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp;  Low stock items alerts <br>
       Track orders any time     &nbsp;  &nbsp; &nbsp;   Exclusive offers <br>
       secure checkout &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; offers alerts
       
       </p> <br>
       <h6 class="fh" style="margin-bottom: 5px; font-weight: bold;">Connect with Daraz</h6>
       
       <!-- Social Media Icons -->
       <div class="smid" >  
  <a class="a2" href="#" target="_blank" style="color: #E4405F; "><i class="fab fa-instagram"></i></a>
  <a class="a2" href="#" target="_blank" style="color: #1877F2; "><i class="fab fa-facebook"></i></a>
  <a class="a2" href="#" target="_blank" style="color: #000000; "><i class="fab fa-tiktok"></i></a>
  <a class="a2" href="#" target="_blank" style="color: #FF0000; "><i class="fab fa-youtube"></i></a>
  <a class="a2" href="#" target="_blank" style="color: #E60023; "><i class="fab fa-pinterest"></i></a>
  <a class="a2" href="#" target="_blank" style="color: #1DA1F2; "><i class="fab fa-twitter"></i></a>
</div>


        </div> 
    </div>
<hr style="width: 90%; border: 2px solid grey; position: absolute;bottom: 1px; left: 50%; transform: translateX(-50%);">

</div>
<div class="lbd">
  <p style="margin: 0;">&copy; 2025 WhaleCo Inc.</p>
  <a class="a3"  href="terms.html" >Terms of Use</a>
  <a class="a3" href="privacy.html">Privacy Policy</a>
  <a class="a3" href="choices.html">Your Privacy Choices</a>
</div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>