<?php
include ("base.php");
//Getting login credentials from form
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $u_name = $_POST['u_id'];
  $check = "SELECT * FROM user_login WHERE uname = '$u_name'";
  $result = mysqli_query($conn,$check);
  $count = mysqli_num_rows($result);
  if($count == 1)
  {
    $sql = "DELETE FROM user_login WHERE uname = '$u_name'";
    if ($conn->query($sql) === true) { 
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }
    else{
      echo 'Error';
    }
    $conn->close();
  }
  else{
    echo 'User does not exist !';
  }
}
?>