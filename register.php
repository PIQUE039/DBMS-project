<?php
include ("base.php");
//Getting login credentials from form
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $u_name = $_POST["r_name"];
  $pass = $_POST["r_password"];

  //SQL Query to find if login credentials match !
  $sql = "INSERT INTO user_login (uname, pword, email, pno) VALUES ('$u_name','$pass', 'test@gmail.com', '98765431')";
  if ($conn->query($sql) === true) {
    header('Location: '.$_SERVER['HTTP_REFERER']);
  }
  $conn->close();
}
?>