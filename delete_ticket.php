<?php
include ("base.php");
//Getting login credentials from form
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $u_name = $_POST['u_id'];
  $check = "SELECT * FROM ticket WHERE u_name = '$u_name'";
  $result = mysqli_query($conn,$check);
  $count = mysqli_num_rows($result);
  if($count == 1)
  {
    $sql = "DELETE FROM ticket WHERE u_name = '$u_name'";
    if ($conn->query($sql) === true) { 
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }
    else{
      echo 'Error';
    }
    $conn->close();
  }
  else{
    echo 'Ticket does not exist !';
  }
}
?>