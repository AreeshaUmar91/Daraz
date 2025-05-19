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
.welcome-card {
    max-width: 600px;
    margin: 200px auto 200px auto; /* Increased from 100px to 150px */
    padding: 30px 40px;
    background: linear-gradient(135deg, #ff7a00, #ff5400);
    color: white;
    border-radius: 15px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    text-align: center;
    font-family: 'Serif', sans-serif;
    font-size: 24px;
    font-weight: bold;
    animation: fadeIn 1s ease-in-out;
}


@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
}


    </style>
</head>

<!-- <body> -->

    <!-- header process -->
     
      <header>
       <div class="div1">
       <a class="a1" href="reseller.php">Account</a>
        <a class="a1" href="chat.php">Messages</a>
        <a class="a1" href="resellerscart.php">Cart</a>
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
      
 
<div class="welcome-card">
  <h2>Welcome to Areesha's Daraz Clone App</h2>
</div>



  
   

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