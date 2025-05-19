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
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/j1.webp" alt="j1">
             <p>  Green stones jewellry set  <br><span class="price" style="color: #fe8e00;">  Rs. 550 PKR</span><br> <span>289 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(34)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/j2.webp" alt="j2">
             <p>  Silver neckles set <br><span class="price" style="color: #fe8e00;">  Rs. 850 PKR</span><br> <span>18 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(5)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/j3.webp" alt="j3">
             <p>  Black heart necklace  <br><span class="price" style="color: #fe8e00;">  Rs. 250 PKR</span><br> <span>389 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(78)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/j4.webp" alt="j4">
             <p>  Golden bracelets <br><span class="price" style="color: #fe8e00;">  Rs. 380 PKR</span><br> <span>140 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(56)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/j5.webp" alt="j5">
             <p>  Mint cute bracelet  <br><span class="price" style="color: #fe8e00;">  Rs. 710 PKR</span><br> <span>480 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(102)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>




         <div class="row rowdiv">
         <div class="col-lg-2 col-md-5 col-sm-5 coldiv"> <img class="img2" src="images/j6.webp" alt="j6">
         <p>  Pearl butterfly choker <br><span class="price" style="color: #fe8e00;">  Rs. 670 PKR</span><br> <span>125 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/j7.webp" alt="j7">
             <p> Silver butterfly pendant  <br><span class="price" style="color: #fe8e00;">  Rs. 360 PKR</span><br> <span>125 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/j8.webp" alt="j8">
             <p>  Unique silver bracelet  <br><span class="price" style="color: #fe8e00;">  Rs. 560 PKR</span><br> <span>125 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/j9.webp" alt="j9">
             <p>  Elegent hand bracelet  <br><span class="price" style="color: #fe8e00;">  Rs. 290 PKR</span><br> <span>125 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/j10.webp" alt="j10">
             <p>  Silver neckles set <br><span class="price" style="color: #fe8e00;">  Rs. 760 PKR</span><br> <span>125 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>
        


         <div class="row rowdiv">
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/j11.webp" alt="j11">
             <p>  Pearl drop earings <br><span class="price" style="color: #fe8e00;">  Rs. 370 PKR</span><br> <span>290 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(45)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/j12.webp" alt="j12">
             <p> Crystal pendant set <br><span class="price" style="color: #fe8e00;">  Rs. 640 PKR</span><br> <span>420 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(190)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/j13.webp" alt="j13">
             <p> Pearl bracelet necklace  <br><span class="price" style="color: #fe8e00;">  Rs. 860 PKR</span><br> <span>170 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(34)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/j14.webp" alt="j14">
             <p>  Moon pendant necklace <br><span class="price" style="color: #fe8e00;">  Rs. 350 PKR</span><br> <span>12 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(3)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/j15.webp" alt="j15">
             <p>  Butterfly pendant necklace <br><span class="price" style="color: #fe8e00;">  Rs. 510 PKR</span><br> <span>269 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(28)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>
        

         <div class="row rowdiv" >
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/j16.webp" alt="j16">
             <p>  Decent Jewellry set  <br><span class="price" style="color: #fe8e00;">  Rs. 890 PKR</span><br> <span>19 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(19)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/j17.webp" alt="j17">
             <p>  Golden anklet <br><span class="price" style="color: #fe8e00;">  Rs. 300 PKR</span><br> <span>204 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(102)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/j18.webp" alt="j18">
             <p>  Ring with box <br><span class="price" style="color: #fe8e00;">  Rs. 500 PKR</span><br> <span>110 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(39)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/j19.webp" alt="j19">
             <p>  Hair jewellry <br><span class="price" style="color: #fe8e00;">  Rs. 620 PKR</span><br> <span>285 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(49)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/j20.webp" alt="j20">
             <p>  Beautiful necklace <br><span class="price" style="color: #fe8e00;">  Rs. 230 PKR</span><br> <span>393 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(119)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>
        
         
         
         <div class="row rowdiv">
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/j21.webp" alt="j21">
             <p>  Bracelet & ring set <br><span class="price" style="color: #fe8e00;">  Rs. 720 PKR</span><br> <span>280 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(49)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/j22.webp" alt="j22">
             <p>  Alphabet pendant necklace  <br><span class="price" style="color: #fe8e00;">  Rs. 300 PKR</span><br> <span>191 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(20)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/j23.webp" alt="j23">
             <p> Pearl earings <br><span class="price" style="color: #fe8e00;">  Rs. 400 PKR</span><br> <span>204 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(193)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/j24.webp" alt="j24">
             <p> Black cover bracelet <br><span class="price" style="color: #fe8e00;">  Rs. 600 PKR</span><br> <span>98 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(30)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/j25.webp" alt="j25">
             <p>  Couple rings  <br><span class="price" style="color: #fe8e00;">  Rs. 320 PKR</span><br> <span>18 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(9)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>
         
         <div class="row rowdiv" >
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/j26.webp" alt="j26">
             <p>  Gold plated bracelet  <br><span class="price" style="color: #fe8e00;">  Rs. 480 PKR</span><br> <span>290 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/j27.webp" alt="j27">
             <p>  Butterfly pendant set <br><span class="price" style="color: #fe8e00;">  Rs. 630 PKR</span><br> <span>389 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(39)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/j28.webp" alt="j28">
             <p>  Handmade beaded necklace <br><span class="price" style="color: #fe8e00;">  Rs. 510 PKR</span><br> <span>296 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(48)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/j29.webp" alt="j29">
             <p>  Pearl stud earrings <br><span class="price" style="color: #fe8e00;">  Rs. 370 PKR</span><br> <span>108 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(19)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/j30.webp" alt="j30">
             <p>  Trendy jewelry set  <br><span class="price" style="color: #fe8e00;">  Rs. 920 PKR</span><br> <span>501 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(209)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>

         <div class="row rowdiv" >
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/j31.webp" alt="j31">
             <p>  Ear studs set <br><span class="price" style="color: #fe8e00;">  Rs. 310 PKR</span><br> <span>209 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(29)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/j32.webp" alt="j32">
             <p>  Cartoon hair clips <br><span class="price" style="color: #fe8e00;">  Rs. 460 PKR</span><br> <span>301 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(40)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/j33.webp" alt="j33">
             <p>  Blue hair bow  <br><span class="price" style="color: #fe8e00;">  Rs. 290 PKR</span><br> <span>125 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(26)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/j34.webp" alt="j34">
             <p>  Red earrings  <br><span class="price" style="color: #fe8e00;">  Rs. 600 PKR</span><br> <span>310 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(37)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/j35.webp" alt="j35">
             <p>  Gold jewelry set <br><span class="price" style="color: #fe8e00;">  Rs. 840 PKR</span><br> <span>203 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(49)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>

         <div class="row rowdiv" >
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/j36.webp" alt="j36">
             <p>  Gift set for girls  <br><span class="price" style="color: #fe8e00;">  Rs. 1200 PKR</span><br> <span>390 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(103)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/j37.webp" alt="j37">
             <p>  Necklace and earring set  <br><span class="price" style="color: #fe8e00;">  Rs. 850 PKR</span><br> <span>410 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(210)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/j38.webp" alt="j38">
             <p>  Flower hair clip  <br><span class="price" style="color: #fe8e00;">  Rs. 320 PKR</span><br> <span>90 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(10)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/j39.webp" alt="j39">
             <p>  Flower design ring  <br><span class="price" style="color: #fe8e00;">  Rs. 300 PKR</span><br> <span>240 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(101)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/j40.webp" alt="j40">
             <p>  Beautiful couple rings <br><span class="price" style="color: #fe8e00;">  Rs. 450 PKR</span><br> <span>106 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(60)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>

         <div class="row rowdiv" >
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/j41.webp" alt="j41">
             <p>  Blank swam pendant   <br><span class="price" style="color: #fe8e00;">  Rs. 590 PKR</span><br> <span>109 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(39)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/j42.webp" alt="j42">
             <p>  Eagle necklace  <br><span class="price" style="color: #fe8e00;">  Rs. 700 PKR</span><br> <span>278 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(109)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/j43.webp" alt="j43">
             <p>  Silver beaded necklace  <br><span class="price" style="color: #fe8e00;">  Rs. 690 PKR</span><br> <span>62 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(19)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/j44.webp" alt="j44">
             <p>  Luxury watch & bracelet  <br><span class="price" style="color: #fe8e00;">  Rs. 1000 PKR</span><br> <span>118 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(49)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/j45.webp" alt="j45">
             <p>  Colorful butterfly bracelet <br><span class="price" style="color: #fe8e00;">  Rs. 640 PKR</span><br> <span>392 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(210)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>

         <div class="row rowdiv" >
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/j46.webp" alt="j46">
             <p>  Pink scrunchine watch <br><span class="price" style="color: #fe8e00;">  Rs. 630 PKR</span><br> <span>298 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(28)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/j47.webp" alt="j47">
             <p>  Silver ring with stone <br><span class="price" style="color: #fe8e00;">  Rs. 710 PKR</span><br> <span>303 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(49)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/j48.webp" alt="j48">
             <p>  Butterfly necklace <br><span class="price" style="color: #fe8e00;">  Rs. 380 PKR</span><br> <span>109 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(7)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/j49.webp" alt="j49">
             <p>  Beaded bracelet <br><span class="price" style="color: #fe8e00;">  Rs. 200 PKR</span><br> <span>89 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(09)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/j50.webp" alt="j50">
             <p>  Hand chain bracelet <br><span class="price" style="color: #fe8e00;">  Rs. 320 PKR</span><br> <span>97 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(36)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
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