<?php
include ("base.php");
//Getting login credentials from form
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $t_name = $_POST['t_number'];
  $_SESSION['t_no'] = $_POST["t_number"];
  $u_name = $_SESSION['uname'];
  $pass = $_SESSION['pword'];
  $from = $_SESSION['source'];
  $to = $_SESSION['to'];
  $check = "SELECT * FROM trains WHERE t_no = '$t_name'";
  $result = mysqli_query($conn,$check);
  $count = mysqli_num_rows($result);
  if($count == 1)
  {
    $sql = "INSERT INTO ticket (t_no, u_name, from_location, to_location) VALUES ('$t_name','$u_name', '$from', '$to')";
    if ($conn->query($sql) === true) { 
      header('Location: thank_you.php');
    }
    else{
      echo 'Error';
    }
    $conn->close();
  }
  else{
    echo 'Train does not exist';
  }
}
?>