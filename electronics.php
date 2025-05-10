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
         / *  border: 2px solid black; */
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
                <img  style="width:150px;height:50px;"src="images/darazlogowhite.png" alt="darazlogo">
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
    <div class="row">
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

<div class="row rowdiv" >
    <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/e1.webp" alt="e1">
    <p> TOP Quality Extension Board  <br><span class="price" style="color: #fe8e00;">  Rs. 1,200  PKR</span><br> <span>100 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(40)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/e2.webp" alt="e2">
    <p>  New Style LED Flashlights  <br><span class="price" style="color: #fe8e00;">  Rs. 450  PKR</span><br> <span>76 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(12)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/e3.webp" alt="e3">
    <p> Electric Milk Frother  <br><span class="price" style="color: #fe8e00;">  Rs. 850   PKR</span><br> <span>99 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(23)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/e4.webp" alt="e4">
    <p> New Portable Blender   <br><span class="price" style="color: #fe8e00;">  Rs. 2,200  PKR</span><br> <span>125 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(33)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/e5.webp" alt="e5">
    <p> Mosquito killer machine  <br><span class="price" style="color: #fe8e00;">  Rs. 3,000  PKR</span><br> <span>131 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(69)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
</div>




<div class="row rowdiv">
<div class="col-lg-2 col-md-5 col-sm-5 coldiv"> <img class="img2" src="images/e6.webp" alt="e6">
<p> Unique Portable Power Strip <br><span class="price" style="color: #fe8e00;">  Rs. 1,500  PKR</span><br> <span>121 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(21)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/e7.webp" alt="e7">
    <p> Latest Pressure Cooker   <br><span class="price" style="color: #fe8e00;">  Rs. 3,500  PKR</span><br> <span>78 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(31)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/e8.webp" alt="e8">
    <p>   Latest Style Electric Stove  <br><span class="price" style="color: #fe8e00;">  Rs. 2,800  PKR</span><br> <span>130 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(40)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/e9.webp" alt="e9">
    <p>  New Style Foldable Kettle   <br><span class="price" style="color: #fe8e00;">  Rs. 2,000  PKR</span><br> <span>105 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(29)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/e10.webp" alt="e10">
    <p>  New Electric Coil Stove  <br><span class="price" style="color: #fe8e00;">  Rs. 2,500  PKR</span><br> <span>99 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(18)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
</div>



<div class="row rowdiv">
    <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/e11.webp" alt="e11">
    <p>  Oscillating Table Fan <br><span class="price" style="color: #fe8e00;">  Rs. 3,500  PKR</span><br> <span>111 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(52)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/e12.webp" alt="e12">
    <p>  Electric Foot Massager Mat <br><span class="price" style="color: #fe8e00;">  Rs. 2,800  PKR</span><br> <span>97 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(31)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/e13.webp" alt="e13">
    <p>  New Multi-Plug Adapter   <br><span class="price" style="color: #fe8e00;">  Rs. 1,200  PKR</span><br> <span>168 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(17)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/e14.webp" alt="e14">
    <p>  Fruit Infuser Water Bottle  <br><span class="price" style="color: #fe8e00;">  Rs. 1,500  PKR</span><br> <span>79 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(49)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/e15.webp" alt="e15">
    <p> Car kettle boiler  <br><span class="price" style="color: #fe8e00;">  Rs. 1000 PKR</span><br> <span>130 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(50)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
</div>


<div class="row rowdiv" >
    <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/e16.webp" alt="e16">
    <p>  Portable Room Heater   <br><span class="price" style="color: #fe8e00;">  Rs. 4500 PKR</span><br> <span>127 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(55)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/e17.webp" alt="e17">
    <p>  Foldable Electric Kettle  <br><span class="price" style="color: #fe8e00;">  Rs.  2,000 PKR</span><br> <span>78 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(47)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/e18.webp" alt="e18">
    <p> Car Immersion Heater Rod  <br><span class="price" style="color: #fe8e00;">  Rs. 900  PKR</span><br> <span>89 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(33)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/e19.webp" alt="e19">
    <p>  Electric Coil Stove <br><span class="price" style="color: #fe8e00;">  Rs. 2,500  PKR</span><br> <span>111 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(29)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/e20.webp" alt="e20">
    <p>  Mini Garlic Chopper  <br><span class="price" style="color: #fe8e00;">  Rs. 1,800  PKR</span><br> <span>200 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(115)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
</div>



<div class="row rowdiv">
    <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/e21.webp" alt="e21">
    <p>  Mini Room Heater  <br><span class="price" style="color: #fe8e00;">  Rs. 3,500 PKR</span><br> <span>132 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(66)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/e22.webp" alt="e22">
    <p>  Electric Food Chopper   <br><span class="price" style="color: #fe8e00;">  Rs. 1,200 PKR</span><br> <span>88 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/e23.webp" alt="e23">
    <p>  Portable Gas Lantern <br><span class="price" style="color: #fe8e00;">  Rs. 2,800 PKR</span><br> <span>93 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(34)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/e24.webp" alt="e24">
    <p>  Rechargeable Blender  <br><span class="price" style="color: #fe8e00;">  Rs. 1,000 PKR</span><br> <span>55 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(12)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/e25.webp" alt="e25">
    <p>  Egg Boiler Steamer  <br><span class="price" style="color: #fe8e00;">  Rs. 1,500 PKR</span><br> <span>112 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(66)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
</div>

<div class="row rowdiv" >
    <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="e26.webp" alt="e26">
    <p>  Electric Cooking Pot  <br><span class="price" style="color: #fe8e00;">  Rs. 2,200 PKR</span><br> <span>144 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(66)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="e27.webp" alt="e27">
    <p>  Multipurpose Hot Pot  <br><span class="price" style="color: #fe8e00;">  Rs. 1,800 PKR</span><br> <span>89 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(13)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="e28.webp" alt="e28">
    <p> New Car Air Purifier  <br><span class="price" style="color: #fe8e00;">  Rs. 2,000 PKR</span><br> <span>112 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(77)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="e29.webp" alt="e29">
    <p>  New Electric Hot Pot  <br><span class="price" style="color: #fe8e00;">  Rs. 2,500 PKR</span><br> <span>99 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(55)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="e30.webp" alt="e30">
    <p>  Electric Toothbrush   <br><span class="price" style="color: #fe8e00;">  Rs. 2,200 PKR</span><br> <span>64 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
</div>

<div class="row rowdiv" >
    <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/e31.webp" alt="e31">
    <p>  Portable Juicer Blender <br><span class="price" style="color: #fe8e00;">  Rs. 1,800 PKR</span><br> <span>85 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(25)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/e32.webp" alt="e32">
    <p>  Electric Stove Burner  <br><span class="price" style="color: #fe8e00;">  Rs. 3,000 PKR</span><br> <span>141 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(43)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/e33.webp" alt="e33">
    <p>  Mini Electric Kettle   <br><span class="price" style="color: #fe8e00;">  Rs. 2,000 PKR</span><br> <span>68 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(12)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/e34.webp" alt="e34">
    <p>  Portable LED Light <br><span class="price" style="color: #fe8e00;">  Rs. 1,500 PKR</span><br> <span>200 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(77)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/e35.webp" alt="e35">
    <p>  Latest Garlic Chopper  <br><span class="price" style="color: #fe8e00;">  Rs. 1,300 PKR</span><br> <span>93 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(32)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
</div>

<div class="row rowdiv" >
    <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/e36.webp" alt="e36">
    <p>  Car Immersion Heater  <br><span class="price" style="color: #fe8e00;">  Rs. 1,000 PKR</span><br> <span>59 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(23)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/e37.webp" alt="e37">
    <p>  Electric Spice Grinder  <br><span class="price" style="color: #fe8e00;">  Rs. 2,000 PKR</span><br> <span>119 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(48)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/e38.webp" alt="e38">
    <p>  Portable Lunch Warmer  <br><span class="price" style="color: #fe8e00;">  Rs. 1,500 PKR</span><br> <span>83 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(37)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/e39.webp" alt="e39">
    <p>  Hand Press Chopper <br><span class="price" style="color: #fe8e00;">  Rs. 1,200 PKR</span><br> <span>102 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(72)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/e40.webp" alt="e40">
    <p>  New Handheld Massager  <br><span class="price" style="color: #fe8e00;">  Rs. 1,800 PKR</span><br> <span>127 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(81)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
</div>

<div class="row rowdiv" >
    <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/e41.webp" alt="e41">
    <p>  Portable Mini Fan  <br><span class="price" style="color: #fe8e00;">  Rs. 1,800 PKR</span><br> <span>140 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(58)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/e42.webp" alt="e42">
    <p>  Electric Portable Stove  <br><span class="price" style="color: #fe8e00;">  Rs. 2,500 PKR</span><br> <span>91 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(42)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="e43.webp" alt="e43">
    <p>  Cordless Hand Mixer   <br><span class="price" style="color: #fe8e00;">  Rs. 2,800 PKR</span><br> <span>139 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(78)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="e44.webp" alt="e44">
    <p>  New Rechargeable Blender  <br><span class="price" style="color: #fe8e00;">  Rs. 2,000 PKR</span><br> <span>74 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(25)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="e45.webp" alt="e45">
    <p>  Electric Body Massager <br><span class="price" style="color: #fe8e00;">  Rs. 1,500 PKR</span><br> <span>86 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(32)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
</div>

<div class="row rowdiv" >
    <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="e46.webp" alt="e46">
    <p>  Mosquito Killer Lamp  <br><span class="price" style="color: #fe8e00;">  Rs. 2,200 PKR</span><br> <span>115 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(90)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="e47.webp" alt="e47">
    <p>  Foldable Electric Kettle  <br><span class="price" style="color: #fe8e00;">  Rs. 2,500 PKR</span><br> <span>80 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(23)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="e48.webp" alt="e48">
    <p>  Air Purifier Machine  <br><span class="price" style="color: #fe8e00;">  Rs. 3,000 PKR</span><br> <span>128 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(48)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="e49.webp" alt="e49">
    <p>  Electric Hot Plate   <br><span class="price" style="color: #fe8e00;">  Rs. 3,200 PKR</span><br> <span>90 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(34)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/e50.webp" alt="e50">
    <p> Handheld Coffee Frother  <br><span class="price" style="color: #fe8e00;">  Rs. 1,500 PKR</span><br> <span>105 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(53)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
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