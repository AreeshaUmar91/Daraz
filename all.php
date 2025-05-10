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
           /* border: 2px solid black;
            height: 1000px;*/
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
      /*  .a1{
           text-decoration: none;
           margin: 30px;
           color: white;
           
       } */
       .a1 {
    text-decoration: none;
    margin: 20px;
    color: white;
    font-size: 18px;
    font-weight: bold;
    position: relative;
    transition: color 0.3s ease-in-out;
}

/* Hover Effect - Smooth Color Change & Glow */
.a1:hover {
    color: #ffcc00; /* Bright accent color */
    text-shadow: 0px 0px 10px rgba(255, 204, 0, 0.8);
}

/* Underline Animation */
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

/* Expand Underline on Hover */
.a1:hover::after {
    width: 100%;
    left: 0;
}
        .div2{
            height: 70px;
         /*  border: 2px solid black; */
            text-align: left;
            background: #ff5400e6;
            padding-left:240px;
            padding-top: 10px;
            font-family: Serif;
            
        }
      /*  input {
        width: 650px;
        height: 40px;
        border: none;
        padding-left: 40px;
        padding-right: 40px; 
        text-align: left;
        margin-left: 50px;
       
        }
        input:hover{
            border:none;
            box-shadow:  5px 5px 1px 1px rgba(170, 161, 151, 0.89);
        }*/
        input {
    width: 650px;
    height: 40px;
  /*  border: 2px solid #ddd;  Subtle border */
    padding-left: 40px;
    padding-right: 40px;
    text-align: left;
    margin-left: 50px;
    font-size: 16px;
    border-radius: 8px; /* Rounded corners */
    outline: none;
    transition: all 0.3s ease-in-out;
    box-shadow: inset 2px 2px 5px rgba(0, 0, 0, 0.1); /* Soft inner shadow */
}

/* Hover Effect - Smooth Glow */
input:hover {
    border-color: #ff5400; /* Accent color */
    box-shadow: 0 0 10px rgba(255, 84, 0, 0.4); /* Soft glowing effect */
}

/* Focus Effect - More Visible */
input:focus {
    border-color: #ff5400;
    box-shadow: 0 0 15px rgba(255, 84, 0, 0.5);
    background-color: #fffaf0; /* Light background change */
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

        /* .btn1:hover {
          background: white;
           color:  #ff5400e6; 
           box-shadow: 0 3px 0 white; 
           padding-bottom: 0px;
           
        }*/
        .btn1:hover {
    background: linear-gradient(135deg, #ff7900, #ff5400);
    transform: scale(1.05); /* Slight zoom effect */
    box-shadow: 0 6px 12px rgba(255, 84, 0, 0.3); /* More intense shadow */
}

/* White bottom border effect on hover */
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

/* Show bottom border on hover */
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

/* Click Effect */
.ci:active {
    transform: scale(0.95);
}

/* Cart Icon Styling */
.ci i {
    font-size: 30px;
    color: white;
    transition: transform 0.3s ease-in-out;
}

/* Cart Icon Animation on Hover */
.ci:hover i {
    transform: scale(1.2) rotate(10deg);
}



.col-lg-2 {
    border-radius: 10px; /* Smooth rounded corners */
    overflow: hidden; /* Ensures rounded corners apply to image */
    box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2); /* Soft shadow */
    background-color: #f8f9fa; /* Light background */
    transition: transform 0.3s ease-in-out; /* Smooth hover effect */
}

.col-lg-2:hover {
    transform: scale(1.02); /* Slight zoom effect on hover */
}

/*.col-lg-2 img {
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    object-fit: cover; 
}*/


    </style>
</head>
<body>

    <!-- header process -->
     
      <header>
       <div class="div1">
       <a class="a1" href="reseller.php">Account</a>
        <a class="a1" href="chat.php">Messages</a>
        <a class="a1" href="resellerscart.php">Cart</a>
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
    <i style="margin-left: 40px; font-size: 30px; color: white; " class="fa-solid fa-cart-shopping"></i>
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
    <div class="container mt-4" style=" height:12500px;width: 1250px;  padding-top:160px; ">
    <div class="row" >
    <div class="col-lg-2 col-md-2 col-sm-2 " style=";width: 80%; " >
    <div class="swiper mySwiper" style=";width:100%;" >
   
        <div class="swiper-wrapper" >
            <div class="swiper-slide slide1"><img class="img1"  src="daraz1.jpg" alt="daraz1"></div>
            <div class="swiper-slide slide2"><img class="img1"  src="daraz2.jpg" alt="daraz2"></div>
            <div class="swiper-slide slide3"><img class="img1"  src="daraz3.jpg" alt="daraz3"></div>
            <div class="swiper-slide slide4"><img class="img1"  src="daraz4.jpg" alt="daraz4"></div>
            <div class="swiper-slide slide5"><img class="img1"  src="daraz5.jpg" alt="daraz5"></div>
            <div class="swiper-slide slide6"><img class="img1"  src="daraz6.jpg" alt="daraz6"></div>
            <div class="swiper-slide slide7"><img class="img1"  src="daraz7.jpg" alt="daraz7"></div>
            <div class="swiper-slide slide8"><img class="img1"  src="daraz8.jpg" alt="daraz8"></div>
            <div class="swiper-slide slide9"><img class="img1"  src="daraz9.jpg" alt="daraz9"></div>
            <div class="swiper-slide slide10"><img class="img1" src="daraz10.jpg" alt="daraz10"></div>
        </div> 
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-2 " style="width:20%;">
        <img style="height:400px;width:100%;" src="sidepic.webp" alt="sidepic">
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
    <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="w1.webp" alt="women1">
            <p>TOP Quality Blue Co-Ord Set  <br><span class="price" style="color: #fe8e00;">  Rs. 1299 PKR</span><br> <span>125 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
           <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="images/img2" src="men1.webp" alt="men1">
             <p>   Men’s Summer T-Shirt  <br><span class="price" style="color: #fe8e00;">  Rs. 605 PKR</span><br> <span>62 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(13)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="images/img2" src="kids1.webp" alt="kids1">
             <p> Mickey mouse kids outfit  <br><span class="price" style="color: #fe8e00;">  Rs. 1000 PKR</span><br> <span>200 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="images/img2" src="s1.webp" alt="s1">
             <p>  Hard Cricket ball   <br><span class="price" style="color: #fe8e00;">  Rs. 800 PKR</span><br> <span>300 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(90)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="images/img2" src="j1.webp" alt="j1">
             <p>  Green stones jewellry set  <br><span class="price" style="color: #fe8e00;">  Rs. 550 PKR</span><br> <span>289 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(34)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
</div>


        


         <div class="row rowdiv">
         <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="bag1.webp" alt="b1">
             <p>  Polka dot tote bag  <br><span class="price" style="color: #fe8e00;">  Rs. 1050 PKR</span><br> <span>98 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(60)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="e1.webp" alt="e1">
             <p> TOP Quality Extension Board  <br><span class="price" style="color: #fe8e00;">  Rs. 1,200  PKR</span><br> <span>100 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(40)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="beauty1.webp" alt="beauty1">
             <p> Pomegranate Skincare Set <br><span class="price" style="color: #fe8e00;">  Rs. 3000  PKR</span><br> <span>121 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(68)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="p1.webp" alt="p1">
             <p>   Pet Collar  <br><span class="price" style="color: #fe8e00;">  Rs. 150 PKR</span><br> <span>250 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(130)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="toy1.webp" alt="t1">
             <p>  Rainbow Spring Toy <br><span class="price" style="color: #fe8e00;">  Rs. 150 PKR</span><br> <span>400 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(20)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>

            </div>

        

 


         <div class="row rowdiv" >
         <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="toy2.webp" alt="t2">
             <p>  Stacking Ring Toy <br><span class="price" style="color: #fe8e00;">  Rs. 190 PKR</span><br> <span>160 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(15)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="p5.webp" alt="p5">
             <p>   Dog's Suit Set  <br><span class="price" style="color: #fe8e00;">  Rs. 699 PKR</span><br> <span>166 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(99)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
           <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="e5.webp" alt="e5">
            <p> Mosquito killer machine  <br><span class="price" style="color: #fe8e00;">  Rs. 3,000  PKR</span><br> <span>131 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(69)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="j2.webp" alt="j2">
             <p>  Silver neckles set <br><span class="price" style="color: #fe8e00;">  Rs. 850 PKR</span><br> <span>18 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(5)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
               <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="kids2.webp" alt="kids2">
             <p>  White baby shoes <br><span class="price" style="color: #fe8e00;">  Rs. 600 PKR</span><br> <span>100 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(36)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    </div>

        
        

         
         
         <div class="row rowdiv">
         <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="w2.webp" alt="women2">
             <p> Women Fashion Block Heels  <br><span class="price" style="color: #fe8e00;">  Rs. 1348 PKR</span><br> <span>110 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(16)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="men5.webp" alt="men5">
             <p> Pack of 2 Sports Black Caps  <br><span class="price" style="color: #fe8e00;">  Rs. 399 PKR</span><br> <span>12 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(03)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="j5.webp" alt="j5">
             <p>  Mint cute bracelet  <br><span class="price" style="color: #fe8e00;">  Rs. 710 PKR</span><br> <span>480 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(102)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
          <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="e3.webp" alt="e3">
          <p> Electric Milk Frother  <br><span class="price" style="color: #fe8e00;">  Rs. 850   PKR</span><br> <span>99 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(23)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="p3.webp" alt="p3">
             <p>   Cat's Sunglasses  <br><span class="price" style="color: #fe8e00;">  Rs. 300 PKR</span><br> <span>125 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(99)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
</div>

        
         
         <div class="row rowdiv" >
         <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="toy5.webp" alt="t5">
             <p>  Wall Climbing Men  <br><span class="price" style="color: #fe8e00;">  Rs. 450 PKR</span><br> <span>470 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(29)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
            <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="beauty5.webp" alt="beauty5">
            <p>  Rice Scrub Face & Body <br><span class="price" style="color: #fe8e00;">  Rs. 1200 PKR</span><br> <span>234sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(70)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="j4.webp" alt="j4">
             <p>  Golden bracelets <br><span class="price" style="color: #fe8e00;">  Rs. 380 PKR</span><br> <span>140 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(56)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="s3.webp" alt="s3">
             <p>  Cricket bat  <br><span class="price" style="color: #fe8e00;">  Rs. 600 PKR</span><br> <span>90 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="men3.webp" alt="men3">
             <p>  Lightweight  Sports Shoes   <br><span class="price" style="color: #fe8e00;">  Rs. 1500 PKR</span><br> <span>42 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(15)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             </div>

         
         <div class="row rowdiv" >
         <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="w3.webp" alt="women3">
             <p>TOP Quality Girls Scarves <br><span class="price" style="color: #fe8e00;">  Rs.602 PKR</span><br> <span>89 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(50)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="s4.webp" alt="s4">
             <p> Hockey white ball  <br><span class="price" style="color: #fe8e00;">  Rs. 200 PKR</span><br> <span>30 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(9)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="bag4.webp" alt="b4">
             <p>  Crossbody sling bag  <br><span class="price" style="color: #fe8e00;">  Rs. 980 PKR</span><br> <span>125 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(210)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
              <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="beauty3.webp" alt="beauty3">
             <p> Full Coverage Foundation   <br><span class="price" style="color: #fe8e00;">  Rs. 2800 PKR</span><br> <span>79 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(23)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="toy3.webp" alt="t3">
             <p>  Cartoon Phone Toy   <br><span class="price" style="color: #fe8e00;">  Rs. 200 PKR</span><br> <span>115 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(12)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
</div>



         
         <div class="row rowdiv" >
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="toy4.webp" alt="t4">
             <p>  Toy Car Set  <br><span class="price" style="color: #fe8e00;">  Rs. 1500 PKR</span><br> <span>97 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(25)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="p2.webp" alt="p2">
             <p>   Cat's Necktie  <br><span class="price" style="color: #fe8e00;">  Rs. 200 PKR</span><br> <span>85 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(67)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="beauty2.webp" alt="beauty2">
             <p> Camelia Moisturizing Cream <br><span class="price" style="color: #fe8e00;">  Rs. 1500  PKR</span><br> <span>90 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(38)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="e4.webp" alt="e4">
             <p> New Portable Blender   <br><span class="price" style="color: #fe8e00;">  Rs. 2,200  PKR</span><br> <span>125 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(33)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="bag5.webp" alt="b5">
             <p>  Elegant scarf handbag <br><span class="price" style="color: #fe8e00;">  Rs. 1020 PKR</span><br> <span>605 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(402)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>



 
         <div class="row rowdiv" >
         <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="w4.webp" alt="women4">
             <p>Women Trendy Cotton Frock  <br><span class="price" style="color: #fe8e00;">  Rs.800 PKR</span><br> <span>95 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(34)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="men2.webp" alt="men2">
             <p>  Summer Trousers For Mens <br><span class="price" style="color: #fe8e00;">  Rs. 700 PKR</span><br> <span>39 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(07)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="kids5.webp" alt="kids5">
             <p>  Unique baby shoes  <br><span class="price" style="color: #fe8e00;">  Rs. 1500 PKR</span><br> <span>400 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(25)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
              <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="bag3.webp" alt="b3">
             <p>  Black travel handbag  <br><span class="price" style="color: #fe8e00;">  Rs. 1500 PKR</span><br> <span>309 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(103)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="p4.webp" alt="p4">
             <p>   Pet Pearl Bow Accessories <br><span class="price" style="color: #fe8e00;">  Rs. 220 PKR</span><br> <span>185 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(277)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
</div>



         <div class="row rowdiv" >
         <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="beauty4.webp" alt="beauty4">
              <p>  Dark Knuckle Serum <br><span class="price" style="color: #fe8e00;">  Rs. 1600   PKR</span><br> <span>99 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(46)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
              <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="e2.webp" alt="e2">
              <p>  New Style LED Flashlights  <br><span class="price" style="color: #fe8e00;">  Rs. 450  PKR</span><br> <span>76 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(12)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="bag2.webp" alt="b2">
             <p>  Mini leather handbag <br><span class="price" style="color: #fe8e00;">  Rs. 1200 PKR</span><br> <span>270 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(59)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="j3.webp" alt="j3">
             <p>  Black heart necklace  <br><span class="price" style="color: #fe8e00;">  Rs. 250 PKR</span><br> <span>389 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(78)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="kids4.webp" alt="kids4">
             <p>  Baby pink socks <br><span class="price" style="color: #fe8e00;">  Rs. 200 PKR</span><br> <span>50 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(12)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
</div>
             <div class="row rowdiv" >
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="w5.webp" alt="women5">
             <p>s Pink Floral T-shirt  <br><span class="price" style="color: #fe8e00;">  Rs. 497 PKR</span><br> <span>102 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(67)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="kids3.webp" alt="kids3">
             <p>  Pink hoodie for kids  <br><span class="price" style="color: #fe8e00;">  Rs. 1200 PKR</span><br> <span>500 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(50)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="men4.webp" alt="men4">
             <p> High Quality Wrist Watch<br><span class="price" style="color: #fe8e00;">  Rs. 810 PKR</span><br> <span>120 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(31)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="s2.webp" alt="s2">
             <p> PCT dress <br><span class="price" style="color: #fe8e00;">  Rs. 1200 PKR</span><br> <span>600 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(389)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="s5.webp" alt="s5">
             <p>  High quality football  <br><span class="price" style="color: #fe8e00;">  Rs. 1050 PKR</span><br> <span>768 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(569)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>


         <div class="row rowdiv">
         <div class="col-lg-2 col-md-5 col-sm-5 coldiv"> <img class="img2" src="w6.webp" alt="women6">
         <p> Pink Bow Loafers For Girls <br><span class="price" style="color: #fe8e00;">  Rs. 1890 PKR</span><br> <span>75 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(20)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
<div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="men9.webp" alt="men9">
             <p> Kashmiri Warm Blue Shawl   <br><span class="price" style="color: #fe8e00;">  Rs. 890 PKR</span><br> <span>70 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(20)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
         <div class="col-lg-2 col-md-5 col-sm-5 coldiv"> <img class="img2" src="s6.webp" alt="s6">
         <p>  Shuttlecocks set <br><span class="price" style="color: #fe8e00;">  Rs. 700 PKR</span><br> <span>125 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="bag7.webp" alt="b7">
             <p>  Yellow drawstring bag <br><span class="price" style="color: #fe8e00;">  Rs. 2000 PKR</span><br> <span>180 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(90)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="beauty8.webp" alt="beauty8">
    <p>  Pink Makeup Brush Set <br><span class="price" style="color: #fe8e00;">  Rs. 900 PKR</span><br> <span>111 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(50)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
</div>


 <div class="row rowdiv">
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv"> <img class="img2" src="toy6.webp" alt="t6">
             <p>  Colorful Clay Set <br><span class="price" style="color: #fe8e00;">  Rs. 300 PKR</span><br> <span>370 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(20)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="toy10.webp" alt="t10">
             <p>  Kids Kitchen Set  <br><span class="price" style="color: #fe8e00;">  Rs. 600 PKR</span><br> <span>130 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(45)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
            <div class="col-lg-2 col-md-5 col-sm-5 coldiv"> <img class="img2" src="beauty6.webp" alt="beauty6">
            <p>  Black & White Lipstick  <br><span class="price" style="color: #fe8e00;">  Rs. 750PKR</span><br> <span>134 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(87)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="bag10.webp" alt="b10">
             <p>  Blue handbag  <br><span class="price" style="color: #fe8e00;">  Rs. 1680 PKR</span><br> <span>92 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(29)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="s10.webp" alt="s10">
             <p>  Boxing gloves  <br><span class="price" style="color: #fe8e00;">  Rs. 600 PKR</span><br> <span>125 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>
 <div class="row rowdiv">
         <div class="col-lg-2 col-md-5 col-sm-5 coldiv"> <img class="img2" src="kids6.webp" alt="kids6">
         <p>  Mama's boy baby outfit  <br><span class="price" style="color: #fe8e00;">  Rs. 800 PKR</span><br> <span>350 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(50)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv"> <img class="img2" src="e6.webp" alt="e6">
             <p> Unique Portable Power Strip <br><span class="price" style="color: #fe8e00;">  Rs. 1,500  PKR</span><br> <span>121 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(21)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="toy7.webp" alt="t7">
             <p>  Mini Toy Cars  <br><span class="price" style="color: #fe8e00;">  Rs. 140 PKR</span><br> <span>150 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(12)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="s7.webp" alt="s7">
             <p>  Hockey sticks  <br><span class="price" style="color: #fe8e00;">  Rs. 300 PKR</span><br> <span>125 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="w10.webp" alt="women10">
             <p> Pack of 5 Chiffon Hijab   <br><span class="price" style="color: #fe8e00;">  Rs. 788 PKR</span><br> <span>107 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(44)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
         </div>
         <div class="row rowdiv">
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="s8.webp" alt="s8">
             <p>  High quality cricket ball <br><span class="price" style="color: #fe8e00;">  Rs. 800 PKR</span><br> <span>125 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         <div class="col-lg-2 col-md-5 col-sm-5 coldiv"> <img class="img2" src="bag6.webp" alt="b6">
         <p>  Pink chain shoulder bag <br><span class="price" style="color: #fe8e00;">  Rs. 1800 PKR</span><br> <span>420 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(109)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
          <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="beauty7.webp" alt="beauty7">
          <p> Lip Gloss Set  <br><span class="price" style="color: #fe8e00;">  Rs. 850 PKR</span><br> <span>98 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
         <div class="col-lg-2 col-md-5 col-sm-5 coldiv"> <img class="img2" src="p6.webp" alt="p6">
             <p>   Pet's Chains and Sunglasses <br><span class="price" style="color: #fe8e00;">  Rs. 605 PKR</span><br> <span>62 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(67)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="toy9.webp" alt="t9">
             <p>  DIY Bead Set <br><span class="price" style="color: #fe8e00;">  Rs. 320 PKR</span><br> <span>91 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(19)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
         </div>
 <div class="row rowdiv">
         <div class="col-lg-2 col-md-5 col-sm-5 coldiv"> <img class="img2" src="j6.webp" alt="j6">
         <p>  Pearl butterfly choker <br><span class="price" style="color: #fe8e00;">  Rs. 670 PKR</span><br> <span>125 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="men7.webp" alt="men7">
             <p>  Stylish Cufflinks For Mens<br><span class="price" style="color: #fe8e00;">  Rs. 299 PKR</span><br> <span>25 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(07)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
            <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="w7.webp" alt="women7">
             <p>Girls Stylish Winter Staller <br><span class="price" style="color: #fe8e00;">  Rs. 582 PKR</span><br> <span>56 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(15)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="j7.webp" alt="j7">
             <p> Silver butterfly pendant  <br><span class="price" style="color: #fe8e00;">  Rs. 360 PKR</span><br> <span>125 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="j10.webp" alt="j10">
             <p>  Silver neckles set <br><span class="price" style="color: #fe8e00;">  Rs. 760 PKR</span><br> <span>125 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>
         <div class="row rowdiv">
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="bag8.webp" alt="b8">
             <p>  Mini crossbody bag  <br><span class="price" style="color: #fe8e00;">  Rs. 1600 PKR</span><br> <span>276 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(86)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="e9.webp" alt="e9">
    <p>  New Style Foldable Kettle   <br><span class="price" style="color: #fe8e00;">  Rs. 2,000  PKR</span><br> <span>105 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(29)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="toy8.webp" alt="t8">
             <p>  Monster Truck Toy  <br><span class="price" style="color: #fe8e00;">  Rs. 200 PKR</span><br> <span>105 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(32)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="p8.webp" alt="p8">
             <p>   Red Pet Bow <br><span class="price" style="color: #fe8e00;">  Rs. 60 PKR</span><br> <span>157 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(37)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="bag9.webp" alt="b9">
             <p>  Black quilted clutch  <br><span class="price" style="color: #fe8e00;">  Rs. 1550 PKR</span><br> <span>386 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(130)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>
<div class="row rowdiv">
         <div class="col-lg-2 col-md-5 col-sm-5 coldiv"> <img class="img2" src="men6.webp" alt="men6">
         <p> Perfume & Body Spray Set <br><span class="price" style="color: #fe8e00;">  Rs. 1599 PKR</span><br> <span>52 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(17)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="kids9.webp" alt="kids9">
             <p> Pink baby cap set <br><span class="price" style="color: #fe8e00;">  Rs. 600 PKR</span><br> <span>50 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(12)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="j9.webp" alt="j9">
             <p>  Elegent hand bracelet  <br><span class="price" style="color: #fe8e00;">  Rs. 290 PKR</span><br> <span>125 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="w8.webp" alt="women8">
             <p>Trendy Black Shirt with Skirt  <br><span class="price" style="color: #fe8e00;">  Rs. 899 PKR</span><br> <span>65 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(11)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
            <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="men10.webp" alt="men10">
             <p> Navy Blue Puffer Jacket   <br><span class="price" style="color: #fe8e00;">  Rs. 1340 PKR</span><br> <span>67 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(29)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
         </div>
         
<div class="row rowdiv">
    <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="e7.webp" alt="e7">
    <p> Latest Pressure Cooker   <br><span class="price" style="color: #fe8e00;">  Rs. 3,500  PKR</span><br> <span>78 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(31)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="p10.webp" alt="p10">
             <p>   Pet Toothbrush  <br><span class="price" style="color: #fe8e00;">  Rs. 75 PKR</span><br> <span>171 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(134)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="kids7.webp" alt="kids7">
             <p>  Colorful babay gloves  <br><span class="price" style="color: #fe8e00;">  Rs. 900 PKR</span><br> <span>80 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(9)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
            <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="w9.webp" alt="women9">
             <p>Stylish Embroidered Jacket  <br><span class="price" style="color: #fe8e00;">  Rs. 1200 PKR</span><br> <span>70 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(33)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="kids10.webp" alt="kids10">
             <p> white baby bodysuit <br><span class="price" style="color: #fe8e00;">  Rs. 1000 PKR</span><br> <span>125 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(50)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>
        
         <div class="row rowdiv">
              <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="beauty9.webp" alt="brauty9">
              <p>  Mascara & Eyeliner Set <br><span class="price" style="color: #fe8e00;">  Rs. 750 PKR</span><br> <span>160 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(90)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="p9.webp" alt="p9">
             <p>   Waterproof Pet Boots  <br><span class="price" style="color: #fe8e00;">  Rs. 380 PKR</span><br> <span>142 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(105)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="j8.webp" alt="j8">
             <p>  Unique silver bracelet  <br><span class="price" style="color: #fe8e00;">  Rs. 560 PKR</span><br> <span>125 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="men8.webp" alt="men8">
             <p> Trendy Black Sneakers <br><span class="price" style="color: #fe8e00;">  Rs. 1590 PKR</span><br> <span>12 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(03)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="e10.webp" alt="e10">
             <p>  New Electric Coil Stove  <br><span class="price" style="color: #fe8e00;">  Rs. 2,500  PKR</span><br> <span>99 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(18)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
</div>

             <div class="row rowdiv">
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="p7.webp" alt="p7">
             <p>   Flower Collars   <br><span class="price" style="color: #fe8e00;">  Rs. 190 PKR</span><br> <span>59 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(77)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="kids8.webp" alt="kids8">
             <p> Black baby dress  <br><span class="price" style="color: #fe8e00;">  Rs. 2000 PKR</span><br> <span>500 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(100)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
            <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="e8.webp" alt="e8">
            <p>   Latest Style Electric Stove  <br><span class="price" style="color: #fe8e00;">  Rs. 2,800  PKR</span><br> <span>130 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(40)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="s9.webp" alt="s9">
             <p>  Badminton set <br><span class="price" style="color: #fe8e00;">  Rs. 1200 PKR</span><br> <span>125 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
            <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="beauty10.webp" alt="beauty10">
            <p>  Matte Nude Lipstick  <br><span class="price" style="color: #fe8e00;">  Rs. 500 PKR</span><br> <span>88 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(34)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
</div> 


<div class="row rowdiv" >
         <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="w11.webp" alt="women11">
             <p> Red Fur Warm Slippers  <br><span class="price" style="color: #fe8e00;">  Rs. 489 PKR</span><br> <span>120 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(70)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="men12.webp" alt="men12">
             <p> Stylish Black Sunglasses  <br><span class="price" style="color: #fe8e00;">  Rs. 650 PKR</span><br> <span>48 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(25)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="s12.webp" alt="s12">
             <p>  Tennis grips set <br><span class="price" style="color: #fe8e00;">  Rs. 589 PKR</span><br> <span>490 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(178)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="j15.webp" alt="j15">
             <p>  Butterfly pendant necklace <br><span class="price" style="color: #fe8e00;">  Rs. 510 PKR</span><br> <span>269 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(28)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="e15.webp" alt="e15">
             <p> Car kettle boiler  <br><span class="price" style="color: #fe8e00;">  Rs. 1000 PKR</span><br> <span>130 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(50)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
</div>
       <div class="row rowdiv">
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="toy11.webp" alt="t11">
             <p>  Pink Teddy Bear <br><span class="price" style="color: #fe8e00;">  Rs. 900 PKR</span><br> <span>115 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(12)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="p14.webp" alt="p14">
             <p>  Christmas-themed Pet Collar  <br><span class="price" style="color: #fe8e00;">  Rs. 175 PKR</span><br> <span>449 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(114)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
            <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="beauty12.webp" alt="beauty12">
            <p>  Makeup Palette Box <br><span class="price" style="color: #fe8e00;">  Rs. 2500 PKR</span><br> <span>67 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(27)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="s13.webp" alt="s13">
             <p>  Compression leg sleeves <br><span class="price" style="color: #fe8e00;">  Rs. 360 PKR</span><br> <span>267 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(38)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="w15.webp" alt="women15">
             <p>  New Stylish Pink  Hoodie   <br><span class="price" style="color: #fe8e00;">  Rs. 800 PKR</span><br> <span>59 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(30)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
         </div>
         <div class="row rowdiv">
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="s11.webp" alt="s11">
             <p>  Boxing hand wraps  <br><span class="price" style="color: #fe8e00;">  Rs. 900 PKR</span><br> <span>700 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(190)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
              <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="bag15.webp" alt="b15">
             <p>  Mini quilted purses <br><span class="price" style="color: #fe8e00;">  Rs. 1290 PKR</span><br> <span>341 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(128)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
              <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="beauty13.webp" alt="beauty13">
              <p>  Waterproof Eyeliner-Mascara  <br><span class="price" style="color: #fe8e00;">  Rs. 1800 PKR</span><br> <span>106 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(80)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="toy15.webp" alt="t15">
             <p>  Fluffy Teddy Bear  <br><span class="price" style="color: #fe8e00;">  Rs. 400 PKR</span><br> <span>92 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(25)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="p15.webp" alt="p15">
             <p>  Paw-shaped Chew Toys  <br><span class="price" style="color: #fe8e00;">  Rs. 50 PKR</span><br> <span>123 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(66)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
         </div>

<div class="row rowdiv">
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="e11.webp" alt="e11">
             <p>  Oscillating Table Fan <br><span class="price" style="color: #fe8e00;">  Rs. 3,500  PKR</span><br> <span>111 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(52)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="j11.webp" alt="j11">
             <p>  Pearl drop earings <br><span class="price" style="color: #fe8e00;">  Rs. 370 PKR</span><br> <span>290 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(45)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="kids13.webp" alt="kids13">
             <p>  Baby decent outfit  <br><span class="price" style="color: #fe8e00;">  Rs. 1500 PKR</span><br> <span>500 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(200)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="men13.webp" alt="men13">
             <p> Luxury Perfume For Men  <br><span class="price" style="color: #fe8e00;">  Rs. 1200 PKR</span><br> <span>62 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(31)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="kids15.webp" alt="kids15">
             <p>  Baby shoes with ribbons  <br><span class="price" style="color: #fe8e00;">  Rs. 400 PKR</span><br> <span>100 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(9)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>
   <div class="row rowdiv">
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="j12.webp" alt="j12">
             <p> Crystal pendant set <br><span class="price" style="color: #fe8e00;">  Rs. 640 PKR</span><br> <span>420 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(190)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
          <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="e13.webp" alt="e13">
             <p>  New Multi-Plug Adapter   <br><span class="price" style="color: #fe8e00;">  Rs. 1,200  PKR</span><br> <span>168 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(17)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="toy12.webp" alt="t12">
             <p>  Toy Food Set  <br><span class="price" style="color: #fe8e00;">  Rs. 1200 PKR</span><br> <span>25 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(26)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="p12.webp" alt="p12">
             <p>  Pet's Brown Bear hat  <br><span class="price" style="color: #fe8e00;">  Rs. 240 PKR</span><br> <span>73 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(29)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="j14.webp" alt="j14">
             <p>  Moon pendant necklace <br><span class="price" style="color: #fe8e00;">  Rs. 350 PKR</span><br> <span>12 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(3)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>
   <div class="row rowdiv">
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="kids11.webp" alt="kids11">
             <p>  Multi color kids socks   <br><span class="price" style="color: #fe8e00;">  Rs. 600 PKR</span><br> <span>200 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(50)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="w13.webp" alt="women13">
             <p> Latest 3-Piece Abaya set   <br><span class="price" style="color: #fe8e00;">  Rs. 2800 PKR</span><br> <span>65 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(05)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
              <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="kids12.webp" alt="kids12">
             <p>  Combo of shoes & hairband <br><span class="price" style="color: #fe8e00;">  Rs. 800 PKR</span><br> <span>300 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(80)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
           <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="e12.webp" alt="e12">
              <p>  Electric Foot Massager Mat <br><span class="price" style="color: #fe8e00;">  Rs. 2,800  PKR</span><br> <span>97 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(31)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="s15.webp" alt="s15">
             <p> Cricket helmets <br><span class="price" style="color: #fe8e00;">  Rs. 690 PKR</span><br> <span>110 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(15)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>
         <div class="row rowdiv">
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="bag11.webp" alt="b11">
             <p>  Leather shoulder bag  <br><span class="price" style="color: #fe8e00;">  Rs. 2500 PKR</span><br> <span>509 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(190)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="w12.webp" alt="women12">
             <p> Purple Cartoon T-shirt  <br><span class="price" style="color: #fe8e00;">  Rs. 460 PKR</span><br> <span>110 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(17)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="j13.webp" alt="j13">
             <p> Pearl bracelet necklace  <br><span class="price" style="color: #fe8e00;">  Rs. 860 PKR</span><br> <span>170 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(34)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="beauty11.webp" alt="beauty11">
             <p>  Aloe Vera Skincare Set <br><span class="price" style="color: #fe8e00;">  Rs. 2200 PKR</span><br> <span>230 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="p13.webp" alt="p13">
             <p>  Colorful Feather Balls  <br><span class="price" style="color: #fe8e00;">  Rs. 45 PKR</span><br> <span>200 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(98)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
</div>   
              <div class="row rowdiv">
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="p11.webp" alt="p11">
             <p>  Pet Scarf with Pom-Poms  <br><span class="price" style="color: #fe8e00;">  Rs. 110 PKR</span><br> <span>199 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(201)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="bag14.webp" alt="b14">
             <p>  Pink pencil case  <br><span class="price" style="color: #fe8e00;">  Rs. 1050 PKR</span><br> <span>240 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(109)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="men15.webp" alt="men15">
             <p>  Comfortable Black Slippers  <br><span class="price" style="color: #fe8e00;">  Rs. 525 PKR</span><br> <span>52 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="w14.webp" alt="women14">
             <p>  100% TOP Quality Scraves   <br><span class="price" style="color: #fe8e00;">  Rs. 599 PKR</span><br> <span>139 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(44)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="bag13.webp" alt="b13">
             <p>  Cute bear backpack  <br><span class="price" style="color: #fe8e00;">  Rs. 2000 PKR</span><br> <span>185 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(89)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
              
         </div>
<div class="row rowdiv">
            <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="beauty14.webp" alt="beauty14">
             <p>  Matte Liquid Lipstick  <br><span class="price" style="color: #fe8e00;">  Rs. 1300 PKR</span><br> <span>80 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(30)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="toy14.webp" alt="t14">
             <p>  Barbie Doll <br><span class="price" style="color: #fe8e00;">  Rs. 599 PKR</span><br> <span>119 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(29)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="kids14.webp" alt="kids15">
             <p>  Pink baby sweater  <br><span class="price" style="color: #fe8e00;">  Rs. 1000 PKR</span><br> <span>150 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="bag12.webp" alt="b12">
             <p>  Grey handbag set  <br><span class="price" style="color: #fe8e00;">  Rs. 3000 PKR</span><br> <span>231 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(120)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="toy13.webp" alt="t13">
             <p>  Hair Styling Kit  <br><span class="price" style="color: #fe8e00;">  Rs. 1100 PKR</span><br> <span>105 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(30)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
</div>

   <div class="row rowdiv">
            <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="men11.webp" alt="men11">
             <p> Traditional Men's Kurta <br><span class="price" style="color: #fe8e00;">  Rs. 1399 PKR</span><br> <span>75 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(16)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="men14.webp" alt="men14">
             <p> Trendy White Cotton T-Shirt   <br><span class="price" style="color: #fe8e00;">  Rs. 730 PKR</span><br> <span>22 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(05)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="s14.webp" alt="s14">
             <p>  Cricket stumps <br><span class="price" style="color: #fe8e00;">  Rs. 1350 PKR</span><br> <span>398 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(80)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
            <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="e14.webp" alt="e14">
            <p>  Fruit Infuser Water Bottle  <br><span class="price" style="color: #fe8e00;">  Rs. 1,500  PKR</span><br> <span>79 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(49)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
            <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="beauty15.webp" alt="beauty15">
            <p> BB Cream Foundation Set <br><span class="price" style="color: #fe8e00;">  Rs. 2000 PKR</span><br> <span>120 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(74)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
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
      <img class="fimg" src="f1.webp" alt="">
      <img class="fimg" src="f2.webp" alt="">
      <img class="fimg" src="f3.webp" alt="">
      <img class="fimg" src="f4.webp" alt="">
      <img class="fimg" src="f5.webp" alt="">
      <img class="fimg" src="f6.webp" alt="">
      <img class="fimg" src="f7.webp" alt="">
    </div>
  </div>

  <div class="iid"  style="width: 550px;">
    <h6 class="fh" style="margin: 0 0 12px 0; white-space: nowrap;">We accept</h6>    
    <div style="display: flex; gap: 5px; flex-wrap: wrap;">
      <img class="fimg" src="f11.webp" alt="">
      <img class="fimg" src="f22.webp" alt="">
      <img class="fimg" src="f33.webp" alt="">
      <img class="fimg" src="f44.webp" alt="">
      <img class="fimg" src="f55.webp" alt="">
      <img class="fimg" src="f66.webp" alt="">
      <img class="fimg" src="f77.webp" alt="">
      <img class="fimg" src="f88.webp" alt="">
      <img class="fimg" src="f99.webp" alt="">
      <img class="fimg" src="f10.webp" alt="">
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