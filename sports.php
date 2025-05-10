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
    <div class="col-lg-2 col-md-2 col-sm-2 " style="width:20%;">
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
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/s1.webp" alt="s1">
             <p>  Hard Cricket ball   <br><span class="price" style="color: #fe8e00;">  Rs. 800 PKR</span><br> <span>300 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(90)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/s2.webp" alt="s2">
             <p> PCT dress <br><span class="price" style="color: #fe8e00;">  Rs. 1200 PKR</span><br> <span>600 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(389)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/s3.webp" alt="s3">
             <p>  Cricket bat  <br><span class="price" style="color: #fe8e00;">  Rs. 600 PKR</span><br> <span>90 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/s4.webp" alt="s4">
             <p> Hockey white ball  <br><span class="price" style="color: #fe8e00;">  Rs. 200 PKR</span><br> <span>30 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(9)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/s5.webp" alt="s5">
             <p>  High quality football  <br><span class="price" style="color: #fe8e00;">  Rs. 1050 PKR</span><br> <span>768 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(569)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>




         <div class="row rowdiv">
         <div class="col-lg-2 col-md-5 col-sm-5 coldiv"> <img class="img2" src="images/s6.webp" alt="s6">
         <p>  Shuttlecocks set <br><span class="price" style="color: #fe8e00;">  Rs. 700 PKR</span><br> <span>125 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/s7.webp" alt="s7">
             <p>  Hockey sticks  <br><span class="price" style="color: #fe8e00;">  Rs. 300 PKR</span><br> <span>125 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/s8.webp" alt="s8">
             <p>  High quality cricket ball <br><span class="price" style="color: #fe8e00;">  Rs. 800 PKR</span><br> <span>125 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/s9.webp" alt="s9">
             <p>  Badminton set <br><span class="price" style="color: #fe8e00;">  Rs. 1200 PKR</span><br> <span>125 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/s10.webp" alt="s10">
             <p>  Boxing gloves  <br><span class="price" style="color: #fe8e00;">  Rs. 600 PKR</span><br> <span>125 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>
        


         <div class="row rowdiv">
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/s11.webp" alt="s11">
             <p>  Boxing hand wraps  <br><span class="price" style="color: #fe8e00;">  Rs. 900 PKR</span><br> <span>700 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(190)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/s12.webp" alt="s12">
             <p>  Tennis grips set <br><span class="price" style="color: #fe8e00;">  Rs. 589 PKR</span><br> <span>490 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(178)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/s13.webp" alt="s13">
             <p>  Compression leg sleeves <br><span class="price" style="color: #fe8e00;">  Rs. 360 PKR</span><br> <span>267 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(38)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/s14.webp" alt="s14">
             <p>  Cricket stumps <br><span class="price" style="color: #fe8e00;">  Rs. 1350 PKR</span><br> <span>398 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(80)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/s15.webp" alt="s15">
             <p> Cricket helmets <br><span class="price" style="color: #fe8e00;">  Rs. 690 PKR</span><br> <span>110 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(15)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>
        

         <div class="row rowdiv" >
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/s16.webp" alt="s16">
             <p>  Skipping rope <br><span class="price" style="color: #fe8e00;">  Rs. 680 PKR</span><br> <span>125 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(90)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/s17.webp" alt="s17">
             <p>  Mikasa volleyball <br><span class="price" style="color: #fe8e00;">  Rs. 1590 PKR</span><br> <span>460 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(102)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/s18.webp" alt="s18">
             <p>  Hand grip exerciser <br><span class="price" style="color: #fe8e00;">  Rs. 740 PKR</span><br> <span>640 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(206)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/s19.webp" alt="s19">
             <p>  High quality cricket bats   <br><span class="price" style="color: #fe8e00;">  Rs. 1750 PKR</span><br> <span>800 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(380)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/s20.webp" alt="s20">
             <p>  Hockey stick <br><span class="price" style="color: #fe8e00;">  Rs. 1280 PKR</span><br> <span>69 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(3)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>
        
         
         
         <div class="row rowdiv">
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/s21.webp" alt="s21">
             <p>  Badminton racket set <br><span class="price" style="color: #fe8e00;">  Rs. 2000 PKR</span><br> <span>257 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(37)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/s22.webp" alt="s22">
             <p>  Shuttlecock <br><span class="price" style="color: #fe8e00;">  Rs. 570 PKR</span><br> <span>289 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(78)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/s23.webp" alt="s23">
             <p>  Cricket pads <br><span class="price" style="color: #fe8e00;">  Rs. 920 PKR</span><br> <span>140 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(13)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/s24.webp" alt="s24">
             <p>  High quality football <br><span class="price" style="color: #fe8e00;">  Rs. 860 PKR</span><br> <span>600 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(150)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/s25.webp" alt="s25">
             <p>  Sports gloves <br><span class="price" style="color: #fe8e00;">  Rs. 380 PKR</span><br> <span>427 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(112)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>
         
         <div class="row rowdiv" >
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/s26.webp" alt="s26">
             <p> Table tennis balls <br><span class="price" style="color: #fe8e00;">  Rs. 870 PKR</span><br> <span>90 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(12)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/s27.webp" alt="s27">
             <p>  Cricket bat  <br><span class="price" style="color: #fe8e00;">  Rs. 1060 PKR</span><br> <span>140 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(91)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/s28.webp" alt="s28">
             <p>  Red cricket ball <br><span class="price" style="color: #fe8e00;">  Rs. 570 PKR</span><br> <span>464 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(120)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/s29.webp" alt="s29">
             <p>  Golf sticks  <br><span class="price" style="color: #fe8e00;">  Rs. 850 PKR</span><br> <span>591 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(279)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/s30.webp" alt="s30">
             <p>  Sports accessory pouch  <br><span class="price" style="color: #fe8e00;">  Rs. 300 PKR</span><br> <span>76 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(16)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>

         <div class="row rowdiv" >
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/s31.webp" alt="s31">
             <p>  Cricket stumps <br><span class="price" style="color: #fe8e00;">  Rs. 1390 PKR</span><br> <span>200 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(56)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/s32.webp" alt="s32">
             <p>  Colorful rubber balls  <br><span class="price" style="color: #fe8e00;">  Rs. 410 PKR</span><br> <span>34 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(14)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/s33.webp" alt="s33">
             <p> Badminton racket set <br><span class="price" style="color: #fe8e00;">  Rs. 1790 PKR</span><br> <span>489 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(16)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/s34.webp" alt="s34">
             <p>  Hockey stick <br><span class="price" style="color: #fe8e00;">  Rs. 730 PKR</span><br> <span>651 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(109)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/s35.webp" alt="s35">
             <p>  Adidas football  <br><span class="price" style="color: #fe8e00;">  Rs. 680 PKR</span><br> <span>201 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(46)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>

         <div class="row rowdiv" >
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/s36.webp" alt="s36">
             <p>  Sports shoes  <br><span class="price" style="color: #fe8e00;">  Rs. 1040 PKR</span><br> <span>481 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(106)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/s37.webp" alt="s37">
             <p> Pakistan cricket hat <br><span class="price" style="color: #fe8e00;">  Rs. 290 PKR</span><br> <span>291 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(90)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/s38.webp" alt="s38">
             <p> Compression sleeves  <br><span class="price" style="color: #fe8e00;">  Rs. 450 PKR</span><br> <span>108 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(3)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/s39.webp" alt="s39">
             <p>  Shuttlecock pack  <br><span class="price" style="color: #fe8e00;">  Rs. 1060 PKR</span><br> <span>373 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(87)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/s40.webp" alt="s40">
             <p> Badminton racket set <br><span class="price" style="color: #fe8e00;">  Rs. 1740 PKR</span><br> <span>125 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(7)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>

         <div class="row rowdiv" >
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/s41.webp" alt="s41">
             <p>  Skipping rope set <br><span class="price" style="color: #fe8e00;">  Rs. 650 PKR</span><br> <span>90 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(15)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/s42.webp" alt="s42">
             <p>  Nike wrist bands  <br><span class="price" style="color: #fe8e00;">  Rs. 360 PKR</span><br> <span>580 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(89)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/s43.webp" alt="s43">
             <p>  Cricket helmet <br><span class="price" style="color: #fe8e00;">  Rs. 980 PKR</span><br> <span>296 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(56)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/s44.webp" alt="s44">
             <p>  Table tennis rackets  <br><span class="price" style="color: #fe8e00;">  Rs. 1020 PKR</span><br> <span>47 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(23)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/s45.webp" alt="s45">
             <p>  Table tennis net   <br><span class="price" style="color: #fe8e00;">  Rs. 1000 PKR</span><br> <span>12 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(9)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>

         <div class="row rowdiv" >
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/s46.webp" alt="s46">
             <p>  Tennis balls<br><span class="price" style="color: #fe8e00;">  Rs. 630 PKR</span><br> <span>78 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(3)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/s47.webp" alt="s47">
             <p>  Badminton shettles set<br><span class="price" style="color: #fe8e00;">  Rs. 1290 PKR</span><br> <span>379 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(15)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/s48.webp" alt="s48">
             <p> Volley ball  <br><span class="price" style="color: #fe8e00;">  Rs. 750 PKR</span><br> <span>129 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(20)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/s49.webp" alt="s49">
             <p>   Cricket bat SAK brand <br><span class="price" style="color: #fe8e00;">  Rs. 1690 PKR</span><br> <span>478 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(79)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/s50.webp" alt="s50">
             <p>  Sports gloves <br><span class="price" style="color: #fe8e00;">  Rs. 680 PKR</span><br> <span>290 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(30)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
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