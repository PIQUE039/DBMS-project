<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Roboto:wght@300;400&family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="main.css">
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home page</title>
</head>
<body>
<form action="profile.php">
   <button type="submit">Click to go back to the Home Page !</button></form> <!--CLICK ME TO GO TO TICKET -->
   <div id="ontop"></div>
   <div class="header" id="head">
      <div class="imgdiv">
         <img src="img/Train_logo.png" alt="Error" class="img">
      </div>
      <!-- Nav Bar -->
      <div class="mid">
         <a class="ha" href="main.html">Home</a>
         <a class="ha" href="#contact us">Contact Us</a>
         <a class="ha" href="#au">About Us</a>
         <a class="ha" href="#feedback">Feedback</a>
         <a class="ha" href="#help">Help</a>
      </div>
      <div class="right">
         <!-- Login and Register -->
         <!-- <button class="lr" id="login" href="#loginpop" onclick="popup()">Login</button> -->
         <!-- <button class="lr" id="register" href="registerpop" onclick="r_popup()">Register</button> -->
      </div>
   </div>
</div>
<div class="main-page-text">
   <!-- Login page -->
   <div class="login_div" id="loginpop">
      <div class="l_header">
         <img class="cross-x" src="img/cross-x-removebg-preview.png" alt="Error">
         <p style="margin-top: 24px;">Login</p>
      </div>
      <form class="l_form" action="login.php" method="POST">
         <label class="l_text" for="">Username</label>
         <input class="l_input" id="l_name" name = "l_name" type="text" placeholder="Username">
         <label class="l_text" for="">Password</label>
         <input class="l_input" id="l_password" name = "l_password" type="password" placeholder="Password">
         <button class="booking" id="l_submit">SUBMIT</button>
      </form>
   </div>
   <!-- Register page -->
   <div class="register_div" id="registerpop">
      <div class="r_header"><p>Register</p></div>
      <form class="r_form" action="register.php" method="POST">
         <label class="r_text" for="">Username</label>
         <input class="r_input" id="r_name" name = "r_name" type="text" placeholder="Username">
         <label class="r_text" for="">Password</label>
         <input class="r_input" id="r_password" name = "r_password" type="password" placeholder="Password">
         <button class="booking" id="r_submit">Register</button>
      </form>
   </div>
      <!-- Welcome text -->
      <img src="img/indian-flag-paint.jpg" alt="Error" class="background-img-two-main">
      <p class="entry-text">Welcome aboard to your hassle-free ticketing journey with us,<br></p>
      <p class="entry-text" id="second-line">Where every destination begins with a click!</p>
      <!-- Booking Button -->
      <!-- <a href="booking.html"><button class="booking">BOOK A TRAIN!</button></a> -->
      <button class="booking" id="login" href="#loginpop" onclick="popup()">Login</button>
      <button class="booking" id="register" href="registerpop" onclick="r_popup()">Register</button>
   </div>
   <!-- Website Information in short -->
   <div class="info_site">
      <div class="is_title">Why use our website to book a train ticket ? 🤔</div>
      <div class="is_row">
         <div class="is_div">
            <div class="is_img"><img src="img/info-img-1.png" alt=""></div>
            <div class="is_info">
               <h3>Get Confirmed Train Tickets</h3>
               <p>With our same train alternates and prediction feature, increase your chances of getting confirm train tickets.</p>
            </div>
         </div>
         <div class="is_div">
            <div class="is_img"><img src="img/info-img-2.png" alt=""></div>
            <div class="is_info">
               <h3>Free Cancellation on Train Tickets</h3>
               <p>Get a full refund on train tickets by opting our free cancellation feature.</p>
            </div>
         </div>
      </div>
      <div class="is_row">
         <div class="is_div">
            <div class="is_img"><img src="img/info-img-3.png" alt=""></div>
            <div class="is_info">
               <h3>Instant Refund & Cancellation</h3>
               <p>Get an instant refund and book your next Train ticket easily.</p>
            </div>
         </div>
         <div class="is_div">
            <div class="is_img"><img src="img/info-img-4.png" alt=""></div>
            <div class="is_info">
               <h3>UPI Enable Secured Payment</h3>
               <p>Payment on ConfirmTkt is highly secured. Easy UPI and other multiple payment modes available.</p>
            </div>
         </div>
      </div>
      <div class="is_row">
         <div class="is_div">
            <div class="is_img"><img src="img/info-img-5.png" alt=""></div>
            <div class="is_info">
               <h3>Train Booking & Enquiry Support</h3>
               <p>24X7 customer support, for any train enquiry & booking related queries call +91 8805132210.</p>
            </div>
         </div>
         <div class="is_div">
            <div class="is_img"><img src="img/info-img-6.png" alt=""></div>
            <div class="is_info">
               <h3>Live Train Status Tracking</h3>
               <p>Train status & notification of your train tickets.</p>
            </div>
         </div>
      </div> 
   </div>
   <!-- About us Discription -->
   <div class="about_us"id="au">
      <div class="au_container">
         <div class="au_header"><h2>ABOUT US</h2></div>
         <div class="au_discription"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam maiores voluptatibus quod quas cum error rem autem, et voluptatem itaque, impedit adipisci vel repellendus, necessitatibus ipsa laboriosam corporis dolorum praesentium quasi dicta omnis molestiae nobis! Eos asperiores quas nihil excepturi praesentium inventore doloribus quidem voluptatem voluptates est, maxime ut iusto dolorum eveniet commodi quibusdam nostrum sunt perferendis dolores mollitia? Dignissimos vel obcaecati aliquam pariatur nihil veritatis laudantium non id soluta perspiciatis, hic ipsam quibusdam omnis voluptates deserunt quidem amet fugiat provident voluptatibus quas ea esse? Velit, totam! Quaerat molestias, sed minus asperiores corrupti deserunt nobis saepe in, beatae expedita numquam amet dignissimos animi soluta dolore. Totam temporibus est explicabo itaque adipisci facilis, voluptate nisi harum vero ipsam magni aliquam commodi, velit, ea assumenda ad! Repellendus obcaecati perspiciatis ratione aut dolore. Reiciendis atque error, molestiae sit hic odit nisi dolores aperiam tempora impedit quod recusandae earum nihil labore vitae. Voluptas maiores, nam sed dicta at, quidem magni provident dolores hic harum minus qui molestias? Dicta pariatur deleniti inventore voluptas quo esse laudantium magni dolorum impedit reiciendis praesentium laboriosam exercitationem explicabo rerum, harum, cumque, quae aspernatur! Quisquam, ex soluta. Fugit, voluptatibus impedit? Quo doloremque ad deleniti reprehenderit obcaecati consequatur molestiae veritatis dolorem?</p></div>
      </div>
   </div>
   <a href="#head"><img id="up" src="img/up-arrow.png" alt="Error"></a>
   <script src="main.js"></script>
</body>
</html>
<!-- About us, Footer, booking page , registration page -->