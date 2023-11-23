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
      table{
            width: 70%;
            margin: auto;
            font-family: Arial, Helvetica, sans-serif;
        }
        table, tr, th, td{
            margin-top:4%;
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
            background-image:none;
            height:98vh;
        }
        header {
            background-color: rgb(15,134,203);
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }
        h2{
            margin-top:4%;
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
            background-color: rgb(15,134,203);
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
            background-color: rgb(15,134,203);
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
            <form action="logout.php" method = "POST"><button class="" id="" >Logout</button></form>
         </div>
   </div>
   <img id="up" src="img/up-arrow.png" alt="Error">
   <script src="main.js"></script> 
   <!--------------------------------------TRAINS------------------------------------------------------------->
    <header>
        <h1>Trains</h1>
    </header>
    <?php
    error_reporting(0);
   include ("base.php");
   $sql = "SELECT * FROM trains";
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
      echo "0 results";
   }
   mysqli_close($conn);
   ?> 
    <main>
    <section id="booking-form">
            <h2>Add a Train : </h2>
            <form action="add_train.php" method="POST">
                <label for="from">Enter Train Number :</label>
                <input type="text" id="t_no" name="t_no" required>
                <label for="from">Enter Region of Depature :</label>
                <input type="text" id="from_location" name="from_location" required>
                <label for="from">Enter Region of Arrival :</label>
                <input type="text" id="to_location" name="to_location" required>
                <label for="from">Enter Seats Available :</label>
                <input type="text" id="seat_available" name="seat_available" required>
                <label for="from">Enter Time of Depature :</label>
                <input type="text" id="time_of_depature" name="time_of_depature" required>
                <label for="from">Enter Time of Arrival :</label>
                <input type="text" id="time_of_arrival" name="time_of_arrival" required>
                </select>
               <button type="submit">Add</button>
            </form>
        </section>
        <div id="bookingDetails" style="display:none;">
    </div>
        <section id="booking-form">
            <h2>Edit a Train's Information : </h2>
            <form action="update_train.php" method="POST">
                <label for="from">Enter Train Number :</label>
                <input type="text" id="t_number" name="t_number" required>
                <label for="from">Enter Column to Change :</label>
                <select id="class" name="t_command" required>
                    <option name="t_command">t_no</option>
                    <option name="t_command">from_location</option>
                    <option name="t_command">to_location</option>
                    <option name="t_command">seat_available</option>
                    <option name="t_command">time_of_depature</option>
                    <option name="t_command">time_of_arrival</option>
                    </select>
                <label for="from">Enter New Value :</label>
                <input type="text" id="t_change" name="t_change" required>
                </select>
               <button type="submit">Edit</button>
            </form>
        </section>
        <div id="bookingDetails" style="display:none;">
    </div>
    <section id="booking-form">
            <h2>Delete a Train's Record : </h2>
            <form action="delete_train.php" method="POST">
                <label for="from">Enter Train Number :</label>
                <input type="text" id="t_number" name="t_number" required>
                </select>
               <button type="submit">Delete</button>
            </form>
        </section>
        <div id="bookingDetails" style="display:none;">
    </div>
    </main>
    <!--------------------------------------USERS------------------------------------------------------------->
    <header>
        <h1>Users</h1>
    </header>
    <?php
    include ("base.php");
   //Getting login credentials from form
   $sql = "SELECT * FROM user_login";
   $result = mysqli_query($conn, $sql);
   
   if(mysqli_num_rows($result) > 0)
   {
      echo '<table> <tr> <th> Username </th> <th> Password </th> <th> Email </th> <th> Phone Number </th> </tr>';
      while($row = mysqli_fetch_assoc($result)){
      // to output mysql data in HTML table format
         echo '<tr > <td>' . $row["uname"] . '</td>
         <td>' . $row["pword"] . '</td>
         <td> ' . $row["email"] . '</td>
         <td>' . $row["pno"] . '</tr>';
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
    <main>
            <section id="booking-form">
            <h2>Add a User : </h2>
            <form action="add_user.php" method="POST">
                <label for="from">Enter Username :</label>
                <input type="text" id="u_name" name="u_name" required>
                <label for="from">Enter Password :</label>
                <input type="text" id="p_word" name="p_word" required>
                <label for="from">Enter Email :</label>
                <input type="text" id="email" name="email" required>
                <label for="from">Enter Phone Number :</label>
                <input type="text" id="pno" name="pno" required>
                </select>
               <button type="submit">Add</button>
            </form>
        </section>
        <div id="bookingDetails" style="display:none;">
    </div>
        <section id="booking-form">
            <h2>Edit a User's Information : </h2>
            <form action="update_user.php" method="POST">
                <label for="from">Enter Username :</label>
                <input type="text" id="u_name" name="u_name" required>
                <label for="from">Enter Column to Change :</label>
                <!-- <input type="text" id="u_command" name="u_command" required> -->
                <select id="class" name="u_command" required>
                    <option name="u_command">pno</option>
                    <option name="u_command">email</option>
                    <option name="u_command">pword</option>
                    <option name="u_command">uname</option>
                    </select>
                <!-- <input type="text" id="t_command" name="t_command" required> -->
                <label for="from">Enter New Value :</label>
                <input type="text" id="u_change" name="u_change" required>
                </select>
               <button type="submit">Edit</button>
            </form>
        </section>
        <div id="bookingDetails" style="display:none;">
    </div>
    <section id="booking-form">
            <h2>Delete a User's Record : </h2>
            <form action="delete_user.php" method="POST">
                <label for="from">Enter Username :</label>
                <input type="text" id="u_id" name="u_id" required>
                </select>
               <button type="submit">Delete</button>
            </form>
        </section>
        <div id="bookingDetails" style="display:none;">
    </div>
    </main>
    <!--------------------------------------TICKETS------------------------------------------------------------->
    <header>
        <h1>Tickets</h1>
    </header>
    <?php
    include ("base.php");
   //Getting login credentials from form
   $sql = "SELECT * FROM ticket";
   $result = mysqli_query($conn, $sql);
   
   if(mysqli_num_rows($result) > 0)
   {
      echo '<table> <tr> <th> Train Number </th> <th> Username </th> </tr>';
      while($row = mysqli_fetch_assoc($result)){
      // to output mysql data in HTML table format
         echo '<tr > <td>' . $row["t_no"] . '</td>
         <td>' . $row["u_name"] .'</tr>';
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
    <main>
    <section id="booking-form">
            <h2>Add a Ticket : </h2>
            <form action="add_ticket.php" method="POST">
                <label for="from">Enter Train Number :</label>
                <input type="text" id="t_no" name="t_no" required>
                <label for="from">Enter Username :</label>
                <input type="text" id="u_name" name="u_name" required>
                </select>
               <button type="submit">Edit</button>
            </form>
        </section>
        <div id="bookingDetails" style="display:none;">
    </div>
        <section id="booking-form">
            <h2>Edit a Ticket's Information : </h2>
            <form action="update_ticket.php" method="POST">
                <label for="from">Enter Username :</label>
                <input type="text" id="t_name" name="t_name" required>
                <label for="dropdown">Enter Column to Change :</label>


                <select id="class" name="t_command" required>
                    <option name="t_command">t_no</option>
                    <!-- <option name="t_command">u_name</option> -->
                    </select>
                <!-- <input type="text" id="t_command" name="t_command" required> -->
                <label for="from">Enter New Value :</label>
                <input type="text" id="t_change" name="t_change" required>
                
               <button type="submit">Edit</button>
            </form>
        </section>
        <div id="bookingDetails" style="display:none;">
    </div>
    <section id="booking-form">
            <h2>Delete a Ticket : </h2>
            <form action="delete_ticket.php" method="POST">
                <label for="from">Enter Username :</label>
                <input type="text" id="u_id" name="u_id" required>
                </select>
               <button type="submit">Delete</button>
            </form>
        </section>
        <div id="bookingDetails" style="display:none;">
    </div>
    </main>
    <!-- <footer>
        <p>&copy; 2023 Train Booking</p>
    </footer> -->
    <script src="main.js"></script>
</body>
</html>  