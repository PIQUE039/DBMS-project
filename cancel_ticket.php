<?php
include ("base.php");
//Getting login credentials from form
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $u_name = $_SESSION['uname'];
  //SQL Query to find if login credentials match !
  $sql = "DELETE FROM ticket WHERE u_name = '$u_name'";
  if ($conn->query($sql) === true) {
    header('Location: main_logged_in.php ');
  }
  $conn->close();
 }
?>