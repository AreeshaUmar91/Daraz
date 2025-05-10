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
        <a class="a1" href="account.php">profile</a>
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
    <div class="row" style=>
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
         <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/men1.webp" alt="men1">
             <p>   Men’s Summer T-Shirt  <br><span class="price" style="color: #fe8e00;">  Rs. 605 PKR</span><br> <span>62 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(13)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/men2.webp" alt="men2">
             <p>  Summer Trousers For Mens <br><span class="price" style="color: #fe8e00;">  Rs. 700 PKR</span><br> <span>39 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(07)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/men3.webp" alt="men3">
             <p>  Lightweight  Sports Shoes   <br><span class="price" style="color: #fe8e00;">  Rs. 1500 PKR</span><br> <span>42 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(15)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/men4.webp" alt="men4">
             <p> High Quality Wrist Watch<br><span class="price" style="color: #fe8e00;">  Rs. 810 PKR</span><br> <span>120 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(31)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/men5.webp" alt="men5">
             <p> Pack of 2 Sports Black Caps  <br><span class="price" style="color: #fe8e00;">  Rs. 399 PKR</span><br> <span>12 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(03)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
         </div>



         <div class="row rowdiv">
         <div class="col-lg-2 col-md-5 col-sm-5 coldiv"> <img class="img2" src="images/men6.webp" alt="men6">
         <p> Perfume & Body Spray Set <br><span class="price" style="color: #fe8e00;">  Rs. 1599 PKR</span><br> <span>52 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(17)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/men7.webp" alt="men7">
             <p>  Stylish Cufflinks For Mens<br><span class="price" style="color: #fe8e00;">  Rs. 299 PKR</span><br> <span>25 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(07)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/men8.webp" alt="men8">
             <p> Trendy Black Sneakers <br><span class="price" style="color: #fe8e00;">  Rs. 1590 PKR</span><br> <span>12 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(03)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/men9.webp" alt="men9">
             <p> Kashmiri Warm Blue Shawl   <br><span class="price" style="color: #fe8e00;">  Rs. 890 PKR</span><br> <span>70 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(20)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/men10.webp" alt="men10">
             <p> Navy Blue Puffer Jacket   <br><span class="price" style="color: #fe8e00;">  Rs. 1340 PKR</span><br> <span>67 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(29)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
         </div>
        
 

        


         <div class="row rowdiv">
         <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/men11.webp" alt="men11">
             <p> Traditional Men's Kurta <br><span class="price" style="color: #fe8e00;">  Rs. 1399 PKR</span><br> <span>75 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(16)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/men12.webp" alt="men12">
             <p> Stylish Black Sunglasses  <br><span class="price" style="color: #fe8e00;">  Rs. 650 PKR</span><br> <span>48 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(25)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/men13.webp" alt="men13">
             <p> Luxury Perfume For Men  <br><span class="price" style="color: #fe8e00;">  Rs. 1200 PKR</span><br> <span>62 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(31)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/men14.webp" alt="men14">
             <p> Trendy White Cotton T-Shirt   <br><span class="price" style="color: #fe8e00;">  Rs. 730 PKR</span><br> <span>22 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(05)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/men15.webp" alt="men15">
             <p>  Comfortable Black Slippers  <br><span class="price" style="color: #fe8e00;">  Rs. 525 PKR</span><br> <span>52 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(22)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
         </div>
        


         <div class="row rowdiv" >
         <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/men16.webp" alt="men16">
             <p> Luxury  Gold Wrist Watch   <br><span class="price" style="color: #fe8e00;">  Rs. 899 PKR</span><br> <span>55 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(21)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/men17.webp" alt="men17">
             <p>  New Hoodie & Jogger Pants <br><span class="price" style="color: #fe8e00;">  Rs. 1650 PKR</span><br> <span>40 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(17)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/men18.webp" alt="men18">
             <p> Classic Long Leather Wallet  <br><span class="price" style="color: #fe8e00;">  Rs. 1200 PKR</span><br> <span>62 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(31)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/men19.webp" alt=",men19">
             <p>  New Shiny Silver Cufflinks <br><span class="price" style="color: #fe8e00;">  Rs. 350 PKR</span><br> <span>32 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(10)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/men20.webp" alt="men20">
             <p>  Traditional Blue Waist Coat  <br><span class="price" style="color: #fe8e00;">  Rs. 1349 PKR</span><br> <span>28 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(04)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
         </div>
        
         

         
         
         <div class="row rowdiv">
         <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/men21.webp" alt="men21">
             <p> Fashionable Black Sunglasses  <br><span class="price" style="color: #fe8e00;">  Rs. 730 PKR</span><br> <span>78 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(31)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/men22.webp" alt="men22">
             <p> New Stylish Sports Cap  <br><span class="price" style="color: #fe8e00;">  Rs. 250 PKR</span><br> <span>67 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(13)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/men23.webp" alt="men23">
             <p> Kashmiri Shawl For Men <br><span class="price" style="color: #fe8e00;">  Rs. 899 PKR</span><br> <span>89 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(42)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/men24.webp" alt="men24">
             <p> New Classic Leather Wallet  <br><span class="price" style="color: #fe8e00;">  Rs. 1150 PKR</span><br> <span>32 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(06)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/men25.webp" alt="men25">
             <p>Comfortable  Black Shoes <br><span class="price" style="color: #fe8e00;">  Rs. 1799 PKR</span><br> <span>55 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(11)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
         </div>

         
         <div class="row rowdiv" >
         <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/men26.webp" alt="men26">
             <p> New Unique Silver Watch   <br><span class="price" style="color: #fe8e00;">  Rs. 1200 PKR</span><br> <span>78 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(34)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/men27.webp" alt="men27">
             <p> Elegant Red-Stone Ring  <br><span class="price" style="color: #fe8e00;">  Rs. 300 PKR</span><br> <span>90 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(23)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/men28.webp" alt="men28">
             <p> Stylish Bracelet For Mens  <br><span class="price" style="color: #fe8e00;">  Rs. 378 PKR</span><br> <span>52 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(31)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/men29.webp" alt="men29">
             <p> New Formal brown shirt <br><span class="price" style="color: #fe8e00;">  Rs. 800 PKR</span><br> <span>43 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(12)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/men30.webp" alt="men30">
            <p> Peshawari Chappal For Gents  <br><span class="price" style="color: #fe8e00;">  Rs. 2000 PKR</span><br> <span>77 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(29)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
         </div>


         <div class="row rowdiv" >
         <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/men31.webp" alt="men31">
             <p> New Trendy Black Shades     <br><span class="price" style="color: #fe8e00;">  Rs. 695 PKR</span><br> <span>82 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(23)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/men32.webp" alt="men32">
             <p> Lightweight Maroon Jacket  <br><span class="price" style="color: #fe8e00;">  Rs. 999 PKR</span><br> <span>37 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(05)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/men33.webp" alt="men33">
             <p> Comfortable Blue Trouser <br><span class="price" style="color: #fe8e00;">  Rs. 800 PKR</span><br> <span>33 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(11)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/men34.webp" alt="men34">
             <p> Peshawari Chappal For Boys   <br><span class="price" style="color: #fe8e00;">  Rs. 2100 PKR</span><br> <span>44 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(16)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/men35.webp" alt="men35">
             <p> Durable Leather Wallet  <br><span class="price" style="color: #fe8e00;">  Rs. 999 PKR</span><br> <span>12 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(03)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
         </div>
 


         <div class="row rowdiv" >
         <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/men36.webp" alt="men36">
             <p> Stylish Braided Bracelet Set<br><span class="price" style="color: #fe8e00;">  Rs. 299 PKR</span><br> <span>62 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(31)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/men37.webp" alt="men37">
             <p> New Stylish  Summer Cap  <br><span class="price" style="color: #fe8e00;">  Rs. 270 PKR</span><br> <span>33 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(12)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/men38.webp" alt="men38">
             <p> Lightweight Hooded Puffer    <br><span class="price" style="color: #fe8e00;">  Rs. 300 PKR</span><br> <span>45 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(18)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/men39.webp" alt="men39">
             <p>  Turkish Style Stone Ring <br><span class="price" style="color: #fe8e00;">  Rs. 1800 PKR</span><br> <span>62 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(31)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/men40.webp" alt="men40">
             <p> Luxurious  Men's Perfume   <br><span class="price" style="color: #fe8e00;">  Rs. 1589 PKR</span><br> <span>62 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(31)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
         </div>
 

         <div class="row rowdiv" >
         <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/men41.webp" alt="men41">
             <p> Hand Bracelet For Boys  <br><span class="price" style="color: #fe8e00;">  Rs. 150 PKR</span><br> <span>14 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(04)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/men42.webp" alt="men42">
             <p>  Trendy Hoodie & Trouser   <br><span class="price" style="color: #fe8e00;">  Rs. 1840 PKR</span><br> <span>55 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(14)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/men43.webp" alt="men43">
             <p> Trendy Sneakers For Boys  <br><span class="price" style="color: #fe8e00;">  Rs. 1684 PKR</span><br> <span>34 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★</span> <span class="sold">(31)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/men44.webp" alt="men44">
             <p> Men's Kashmiri Wool Shawl   <br><span class="price" style="color: #fe8e00;">  Rs. 999 PKR</span><br> <span>56 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(31)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/men45.webp" alt="men45">
             <p> Fahionable Trendy Glasses  <br><span class="price" style="color: #fe8e00;">  Rs. 759 PKR</span><br> <span>73 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★</span> <span class="sold">(12)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
         </div>
 


         <div class="row rowdiv" >
         <div class="col-lg-2 col-md-5 col-sm-5 coldiv" > <img class="img2" src="images/men46.webp" alt="men46">
             <p>  Perfume For Mens<br><span class="price" style="color: #fe8e00;">  Rs. 1300 PKR</span><br> <span>44 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(06)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/men47.webp" alt="men47">
             <p> Comfortable Black Slippers  <br><span class="price" style="color: #fe8e00;">  Rs. 499 PKR</span><br> <span>23 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(31)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/men48.webp" alt="men48">
             <p> Classic Full-Sleeve Shirt  <br><span class="price" style="color: #fe8e00;">  Rs. 815 PKR</span><br> <span>52 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★★★</span> <span class="sold">(31)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv " > <img class="img2" src="images/men49.webp" alt="men49">
             <p> Premium Blue Stone Ring <br><span class="price" style="color: #fe8e00;">  Rs. 299 PKR</span><br> <span>62 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★</span> <span class="sold">(31)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
             <div class="col-lg-2 col-md-4 col-sm-6 coldiv" > <img class="img2" src="images/men50.webp" alt="men50">
             <p> Premium Fragrance For Boys <br><span class="price" style="color: #fe8e00;">  Rs. 980 PKR</span><br> <span>80 sold </span><br><span class="star" style=" font-size: 20px; color: gold;">★★★</span> <span class="sold">(31)  </span></p><button class="buy-btn" onclick="addToCartMessage(this)">Buy Now</button> </div>
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