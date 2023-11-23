<?php
include ("base.php");
//Getting login credentials from form
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $t_name = $_POST['t_number'];
  $t_command = $_POST['t_command'];
  $t_change = $_POST['u_change'];
  $check = "SELECT * FROM trains WHERE t_no = '$t_name'";
  $result = mysqli_query($conn,$check);
  $count = mysqli_num_rows($result);
  if($count == 1)
  {
    $sql = "UPDATE trains SET $t_command = '$t_change' WHERE t_no = '$t_name' ";
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