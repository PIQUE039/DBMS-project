<?php
include ("base.php");
//Getting login credentials from form
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $u_name = $_POST["l_name"];
  $_SESSION['uname'] = $_POST["l_name"];
  $pass = $_POST["l_password"];
  $_SESSION['pword'] = $_POST["l_password"];
  //SQL Query to find if login credentials match !
  $sql = "SELECT * FROM user_login WHERE uname = '$u_name' and pword = '$pass'";
  $result = mysqli_query($conn,$sql);
  $count = mysqli_num_rows($result);
    
  // If result matched $myusername and $mypassword, table row must be 1 row
      
  if($count == 1) {
    session_start();
    header('Location: booking.php');
  }
  else {
    echo("<script>alert('Wrong Username or Password !')</script>");
    echo("<script>window.location = 'main.html';</script>");}  
 }
?>
