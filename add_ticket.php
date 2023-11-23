<?php
include ("base.php");
//Getting login credentials from form
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $t_no = $_POST["t_no"];
  $u_name = $_POST["u_name"];
  $check = "SELECT * FROM trains WHERE t_no = '$t_no'";
  $result = mysqli_query($conn,$check);
  $count = mysqli_num_rows($result);
  if($count == 1)
  {
    $sql = "INSERT INTO ticket (t_no, u_name, from_location, to_location) VALUES ('$t_no','$u_name', '$from_location', '$to_location')";
  if ($conn->query($sql) === true) {
    header('Location: '.$_SERVER['HTTP_REFERER']);
    }
    $conn->close();
  }
  else{
    echo 'Train does not exist !';
  }
  //SQL Query to find if login credentials match !
  
}
?>