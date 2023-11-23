<?php
include ("base.php");
//Getting login credentials from form
if($_SERVER["REQUEST_METHOD"] == "POST") {
    session_destroy();
    header('Location: main.html');
}
?>