<?php
include ("base.php");
//Getting login credentials from form
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $t_no = $_POST["t_no"];
  $from_location = $_POST["from_location"];
  $to_location = $_POST["to_location"];
  $seat_available = $_POST["seat_available"];
  $time_of_depature = $_POST["time_of_depature"];
  $time_of_arrival = $_POST["time_of_arrival"];
  //SQL Query to find if login credentials match !
  $sql = "INSERT INTO trains (t_no, from_location, to_location, seat_available, time_of_depature, time_of_arrival ) VALUES ('$t_no','$from_location', '$to_location', '$seat_available', '$time_of_depature', '$time_of_arrival' )";
  if ($conn->query($sql) === true) {
    header('Location: '.$_SERVER['HTTP_REFERER']);
  }
  $conn->close();
}
?>