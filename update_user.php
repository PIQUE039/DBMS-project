<?php
include ("base.php");
//Getting login credentials from form
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $u_name = $_POST['u_name'];
  $u_command = $_POST['u_command'];
  $u_change = $_POST['u_change'];
  $check = "SELECT * FROM user_login WHERE uname = '$u_name'";
  $result = mysqli_query($conn,$check);
  $count = mysqli_num_rows($result);
  if($count == 1)
  {
    $sql = "UPDATE user_login SET $u_command = '$u_change' WHERE uname = '$u_name' ";
    if ($conn->query($sql) === true) { 
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }
    else{
      echo 'Error';
    }
    $conn->close();
  }
  else{
    echo 'Train does not exist !';
  }
}