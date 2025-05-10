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
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/kids1.webp" alt="kids1">
             <p> Mickey mouse kids outfit  <br><span class="price" style="color: #fe8e00;">  Rs. 1000 PKR</span><br> <span>200 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/kids2.webp" alt="kids2">
             <p>  White baby shoes <br><span class="price" style="color: #fe8e00;">  Rs. 600 PKR</span><br> <span>100 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(36)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/kids3.webp" alt="kids3">
             <p>  Pink hoodie for kids  <br><span class="price" style="color: #fe8e00;">  Rs. 1200 PKR</span><br> <span>500 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(50)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/kids4.webp" alt="kids4">
             <p>  Baby pink socks <br><span class="price" style="color: #fe8e00;">  Rs. 200 PKR</span><br> <span>50 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(12)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/kids5.webp" alt="kids5">
             <p>  Unique baby shoes  <br><span class="price" style="color: #fe8e00;">  Rs. 1500 PKR</span><br> <span>400 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(25)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>




         <div class="row rowdiv">
         <div class="col-lg-2 col-md-5 col-sm-5 coldiv"> <img class="img2" src="images/kids6.webp" alt="kids6">
         <p>  Mama's boy baby outfit  <br><span class="price" style="color: #fe8e00;">  Rs. 800 PKR</span><br> <span>350 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(50)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/kids7.webp" alt="kids7">
             <p>  Colorful babay gloves  <br><span class="price" style="color: #fe8e00;">  Rs. 900 PKR</span><br> <span>80 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(9)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/kids8.webp" alt="kids8">
             <p> Black baby dress  <br><span class="price" style="color: #fe8e00;">  Rs. 2000 PKR</span><br> <span>500 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(100)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/kids9.webp" alt="kids9">
             <p> Pink baby cap set <br><span class="price" style="color: #fe8e00;">  Rs. 600 PKR</span><br> <span>50 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(12)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/kids10.webp" alt="kids10">
             <p> white baby bodysuit <br><span class="price" style="color: #fe8e00;">  Rs. 1000 PKR</span><br> <span>125 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(50)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>
        


         <div class="row rowdiv">
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/kids11.webp" alt="kids11">
             <p>  Multi color kids socks   <br><span class="price" style="color: #fe8e00;">  Rs. 600 PKR</span><br> <span>200 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(50)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/kids12.webp" alt="kids12">
             <p>  Combo of shoes & hairband <br><span class="price" style="color: #fe8e00;">  Rs. 800 PKR</span><br> <span>300 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(80)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/kids13.webp" alt="kids13">
             <p>  Baby decent outfit  <br><span class="price" style="color: #fe8e00;">  Rs. 1500 PKR</span><br> <span>500 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(200)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/kids14.webp" alt="kids15">
             <p>  Pink baby sweater  <br><span class="price" style="color: #fe8e00;">  Rs. 1000 PKR</span><br> <span>150 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/kids15.webp" alt="kids15">
             <p>  Baby shoes with ribbons  <br><span class="price" style="color: #fe8e00;">  Rs. 400 PKR</span><br> <span>100 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(9)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>
        

         <div class="row rowdiv" >
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/kids16.webp" alt="kids16">
             <p>  Baby feeding plates <br><span class="price" style="color: #fe8e00;">  Rs. 200 PKR</span><br> <span>300 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(6)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/kids17.webp" alt="kids17">
             <p> Trendy baby shoes <br><span class="price" style="color: #fe8e00;">  Rs. 850 PKR</span><br> <span>150 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(20)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/kids18.webp" alt="kids18">
             <p>  White stylish outfit <br><span class="price" style="color: #fe8e00;">  Rs. 2000 PKR</span><br> <span>250 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(80)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/kids19.webp" alt="kids19">
             <p>  Orange sweater & trouser <br><span class="price" style="color: #fe8e00;">  Rs. 1600 PKR</span><br> <span>300 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(150)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/kids20.webp" alt="kids20">
             <p>  Purple fluffy hat  <br><span class="price" style="color: #fe8e00;">  Rs. 300 PKR</span><br> <span>30 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(10)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>
        
         
         
         <div class="row rowdiv">
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/kids21.webp" alt="kids21">
             <p>  Pink fleece jacket  <br><span class="price" style="color: #fe8e00;">  Rs. 1200 PKR</span><br> <span>200 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/kids22.webp" alt="kids22">
             <p>  Kids cartoons socks <br><span class="price" style="color: #fe8e00;">  Rs. 1000 PKR</span><br> <span>800 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(200)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/kids23.webp" alt="kids23">
             <p>  Sweater with pants  <br><span class="price" style="color: #fe8e00;">  Rs. 1800 PKR</span><br> <span>250 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(11)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/kids24.webp" alt="kids24">
             <p>  Stylish babay gloves  <br><span class="price" style="color: #fe8e00;">  Rs. 250 PKR</span><br> <span>10 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(2)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/kids25.webp" alt="kids25">
             <p>  Winter set for kids  <br><span class="price" style="color: #fe8e00;">  Rs. 1000 PKR</span><br> <span>25 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(12)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>
         
         <div class="row rowdiv" >
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/kids26.webp" alt="kids26">
             <p>  Trendy style socks <br><span class="price" style="color: #fe8e00;">  Rs. 950 PKR</span><br> <span>300 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(180)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/kids27.webp" alt="kids27">
             <p>  Unique baby bracelet  <br><span class="price" style="color: #fe8e00;">  Rs. 100 PKR</span><br> <span>600 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(300)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/kids28.webp" alt="kids28">
             <p>  Pink bunny bathrobe <br><span class="price" style="color: #fe8e00;">  Rs. 750 PKR</span><br> <span>500 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(450)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/kids29.webp" alt="kids29">
             <p>  Frilly baby frock  <br><span class="price" style="color: #fe8e00;">  Rs. 1300 PKR</span><br> <span>120 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/kids30.webp" alt="kids30">
             <p>  Bunny cozy slippers <br><span class="price" style="color: #fe8e00;">  Rs. 780 PKR</span><br> <span>190 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(90)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>

         <div class="row rowdiv" >
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/kids31.webp" alt="kids31">
             <p>  New baby cap  <br><span class="price" style="color: #fe8e00;">  Rs. 300 PKR</span><br> <span>290 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(140)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/kids32.webp" alt="kids32">
             <p>  Baby towel set <br><span class="price" style="color: #fe8e00;">  Rs. 1600 PKR</span><br> <span>145 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(96)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/kids33.webp" alt="kids33">
             <p> set of bands & socks <br><span class="price" style="color: #fe8e00;">  Rs. 650 PKR</span><br> <span>145 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(7)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/kids34.webp" alt="kids34">
             <p>  Trendy baby outfit  <br><span class="price" style="color: #fe8e00;">  Rs. 1050 PKR</span><br> <span>300 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(150)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/kids35.webp" alt="kids35">
             <p>  Green fancy frock  <br><span class="price" style="color: #fe8e00;">  Rs. 3000 PKR</span><br> <span>40 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(10)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>

         <div class="row rowdiv" >
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/kids36.webp" alt="kids36">
             <p>  Blue baby gloves  <br><span class="price" style="color: #fe8e00;">  Rs. 500 PKR</span><br> <span>360 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(200)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/kids37.webp" alt="kids37">
             <p>  Kitty pink bag  <br><span class="price" style="color: #fe8e00;">  Rs. 1190 PKR</span><br> <span>800 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(600)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/kids38.webp" alt="kids38">
             <p>  Pink baby bracelets <br><span class="price" style="color: #fe8e00;">  Rs. 600 PKR</span><br> <span>200 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(105)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/kids39.webp" alt="kids39">
             <p>  Fluffy baby sweater <br><span class="price" style="color: #fe8e00;">  Rs. 1490 PKR</span><br> <span>315 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(125)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/kids40.webp" alt="kids40">
             <p> Pair of frocks <br><span class="price" style="color: #fe8e00;">  Rs. 2600 PKR</span><br> <span>180 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(72)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>

         <div class="row rowdiv" >
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/kids41.webp" alt="kids41">
             <p>  Orange cartoon slipper  <br><span class="price" style="color: #fe8e00;">  Rs. 560 PKR</span><br> <span>28 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(13)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/kids42.webp" alt="kids42">
             <p> Grey kids booties  <br><span class="price" style="color: #fe8e00;">  Rs. 575 PKR</span><br> <span>328 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(35)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/kids43.webp" alt="kids43">
             <p> Black boy outfit <br><span class="price" style="color: #fe8e00;">  Rs. 1240 PKR</span><br> <span>89 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(11)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/kids44.webp" alt="kids44">
             <p>  Set of bracelets  <br><span class="price" style="color: #fe8e00;">  Rs. 270 PKR</span><br> <span>500 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(267)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/kids45.webp" alt="kids45">
             <p> Barbie sweet shirt  <br><span class="price" style="color: #fe8e00;">  Rs. 745 PKR</span><br> <span>267 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(129)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
         </div>

         <div class="row rowdiv" >
             <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/kids46.webp" alt="kids46">
             <p>  Soft baby socks  <br><span class="price" style="color: #fe8e00;">  Rs. 1040 PKR</span><br> <span>400 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(289)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/kids47.webp" alt="kids47">
             <p> Baby cute blanket  <br><span class="price" style="color: #fe8e00;">  Rs. 800 PKR</span><br> <span>304 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(76)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/kids48.webp" alt="kids48">
             <p> Stylish baby outfit  <br><span class="price" style="color: #fe8e00;">  Rs. 600 PKR</span><br> <span>267 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(190)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/kids49.webp" alt="kids49">
             <p>  Cartoon faces slippers <br><span class="price" style="color: #fe8e00;">  Rs. 1080 PKR</span><br> <span>180 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(30)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/kids50.webp" alt="kids50">
             <p>  Pink frock trendy  <br><span class="price" style="color: #fe8e00;">  Rs. 760 PKR</span><br> <span>230 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(189)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div> 
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