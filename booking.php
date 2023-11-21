<!DOCTYPE html>
<html lang="en">
<head>
   <!-- https://www.webcodzing.com/display-mysql-table-data-from-database-using-php/ -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Roboto:wght@300;400&family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="main.css">
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home page</title>
   <style>
      body{
         background-image: none;
      }
   </style>
</head>
<body>
   <?php
   include ("base.php");
   //Getting login credentials from form
   $sql = "SELECT * FROM user_login";
   $result = mysqli_query($conn, $sql);
   if(mysqli_num_rows($result) > 0)
       {
          while($row = mysqli_fetch_assoc($result)){
              echo "Username : " . $row["uname"]. " - Password : " . $row["pword"]. " Email: ". $row["email"]. " Phone Number : ". $row["pno"] . "<br>";
          }
       }
       else
       {
           echo "0 results";
       }
       // closing connection
       mysqli_close($conn);
   ?>
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
            
         </div>
   </div>
   <img id="up" src="img/up-arrow.png" alt="Error">
   <script src="main.js"></script>
</body>
</html>  