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
   <title>Database Records</title>
    <style>
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
    </style>
   <?php
   include ("base.php");
   //Getting login credentials from form
   $sql = "SELECT * FROM trains";
   $result = mysqli_query($conn, $sql);
   if(mysqli_num_rows($result) > 0)
   {
      echo '<table> <tr> <th> Train Number </th> <th> Location </th> <th> Destination </th> <th> Seat Available </th> </tr> Time of Depature </th> </tr> Time of Arrival </th> </tr>';
      while($row = mysqli_fetch_assoc($result)){
      // to output mysql data in HTML table format
         echo '<tr > <td>' . $row["t_no"] . '</td>
         <td>' . $row["from_location"] . '</td>
         <td> ' . $row["to_location"] . '</td>
         <td>' . $row["seat_available"] . '</td> 
         <tr>' . $row["time_of_depature"] . '</td>
         <tr>' . $row["time_of_arrival"] . '</td>;
         
      }
      echo '</table>';
   }
   else
   {
      echo "0 results";
   }
   // closing connection
   mysqli_close($conn);
   ?>
</body>
</html>  