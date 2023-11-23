<?php
include ("base.php");
//Getting login credentials from form
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $a_name = $_POST["a_name"];
  $pass = $_POST["a_password"];
  //SQL Query to find if login credentials match !
  $sql = "SELECT * FROM admin_table WHERE aname = '$a_name' and pword = '$pass'";
  $result = mysqli_query($conn,$sql);
  $count = mysqli_num_rows($result);
    
  // If result matched $myusername and $mypassword, table row must be 1 row
      
  if($count == 1) {
    session_start();
    header('Location: admin.php');
  }
  else {
    echo("<script>alert('Wrong Username or Password !')</script>");
    echo("<script>window.location = 'main.html';</script>");  }  
 }
?>