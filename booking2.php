<!DOCTYPE html>
<html lang="en">
<head>
   <!-- https://www.webcodzing.com/display-mysql-table-data-from-database-using-php/ -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Roboto:wght@300;400&family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="main.css">
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home page</title>
   <style>
      body{
         background-image: none;
      }
      table{
            width: 70%;
            margin: auto;
            font-family: Arial, Helvetica, sans-serif;
        }
        table, tr, th, td{
            border: 1px solid #d4d4d4;
            border-collapse: collapse;
            padding: 12px;
            
        }
        th, td{
            text-align: left;
            vertical-align: top;
        }
        tr:nth-child(even){
            background-color: #e7e9eb;
        }
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 1em 0;
}

main {
    padding: 20px;
}

#booking-form {
    max-width: 400px;
    margin: 0 auto;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-top: 10px;
}

input, select {
    padding: 8px;
    margin-top: 5px;
}

button {
    background-color: #333;
    color: #fff;
    padding: 10px;
    border: none;
    cursor: pointer;
    margin-top: 10px;
}

button:hover {
    background-color: #555;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 1em 0;
    position: fixed;
    bottom: 0;
    width: 100%;
}
#up{
   display: none;
   width: 40px;
   height: 40px;
   top: 92%;
   left: 96%;
   border-radius: 50%;
   z-index: 1;
   position: fixed;
}
#up:hover{
   box-shadow: 0px 0px 9px 0px black;
   transition: 0.2s;
}
</style>
</head>
<body>
   <div class="header" id="head">
      <div class="imgdiv">
         <img src="img/Train_logo.png" alt="Error" class="img">
      </div>
      <!-- Nav Bar -->
         <div class="mid">
            <a class="ha" href="main.html">Home</a>
            <a class="ha" href="#contact us">Contact Us</a>
            <a class="ha" href="#au">About Us</a>
            <a class="ha" href="#feedback">Feedback</a>
            <a class="ha" href="#help">Help</a>
         </div>
         <div class="right">
            
         </div>
   </div>
   <img id="up" src="img/up-arrow.png" alt="Error">
   <script src="main.js"></script> 
    <header>
        <h1>Train Booking</h1>
    </header>
    <?php
    include ("base.php");
    if($_SERVER["REQUEST_METHOD"] == "POST") {
    $source = $_POST['source'];
    $_SESSION['source'] = $_POST['source'];
    $to = $_POST['to'];
    $_SESSION['to'] = $_POST['to'];
    $sql = "SELECT * FROM trains WHERE from_location = '$source' AND to_location = '$to'";
    $result = mysqli_query($conn, $sql);
   
    if(mysqli_num_rows($result) > 0)
    {
        echo '<table> <tr> <th> Train Number </th> <th> Location </th> <th> Destination </th> <th> Seat Available </th> <th> Time of Depature </th> <th> Time of Arrival </th> </tr>';
        while($row = mysqli_fetch_assoc($result)){
            echo '<tr > <td>' . $row["t_no"] . '</td>
            <td>' . $row["from_location"] . '</td>
            <td> ' . $row["to_location"] . '</td>
            <td>' . $row["seat_available"] . '</td> 
            <td>' . $row["time_of_depature"] . '</td>
            <td>' . $row["time_of_arrival"] . '</tr>';
        }
        echo '</table>';
    }
    else
    {
        header('Location: booking.php');
    }
}
   // closing connection
   mysqli_close($conn);
   ?> 
    <main>
        <section id="booking-form">
            <h2>Book Your Train</h2>
            <form action="book.php" method="POST">
                <label for="from">Enter Train Number :</label>
                <input type="text" id="t_number" name="t_number" required>

                <!-- <label for="to">To:</label>
                <input type="text" id="to" name="to" required> -->

                <!-- <label for="date">Date:</label>
                <input type="date" id="date" name="date" required> -->

                <!-- <label for="class">Class:</label>
                <select id="class" name="class" required>
                    <option value="economy">Economy</option>
                    <option value="business">Business</option>
                    <option value="first-class">First Class</option> -->
                </select>
               <button type="submit">Book Now</button>
            </form>
        </section>
        <div id="bookingDetails" style="display:none;">
    </div>
    </main>
    <footer>
        <p>&copy; 2023 Train Booking</p>
    </footer>
    <script src="main.js"></script>
</body>
</html>  