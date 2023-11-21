<?php
include ("base.php");
//Getting login credentials from form
$sql = "SELECT * FROM user_login";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
    {
       while($row = mysqli_fetch_assoc($result)){
           echo "Username : " . $row["uname"]. " - Password : " . $row["pword"]. " Email: ". $row["email"]. " Phone Number : ". $row["pno"] . "<br>";
       }
    }
    else
    {
        echo "0 results";
    }
    // closing connection
    mysqli_close($con);

?>