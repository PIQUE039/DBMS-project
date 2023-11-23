<?php
include ("base.php");
//Getting login credentials from form
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $u_name = $_POST["u_name"];
  $p_word = $_POST["p_word"];
  $email = $_POST["email"];
  $pno = $_POST["pno"];
  //SQL Query to find if login credentials match !
  $sql = "INSERT INTO user_login (uname, pword, email, pno) VALUES ('$u_name','$p_word', '$email', '$pno')";
  if ($conn->query($sql) === true) {
    header('Location: '.$_SERVER['HTTP_REFERER']);
  }
  $conn->close();
}
?>