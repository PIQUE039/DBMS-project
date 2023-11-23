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
        height: 98vh;
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
    background-color: rgb(15,134,203);
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
            
         </div>
   </div>
   <img id="up" src="img/up-arrow.png" alt="Error">
   <script src="main.js"></script> 
    <header>
        <h1>Train Booking</h1>
    </header>
    <main>
        <section id="booking-form">
            <h2>Enter Train Details</h2>
            <form action="booking2.php" method="POST">
                <label for="from">Enter Source Location</label>
                <input type="text" id="source" name="source" required>
                <label for="to">Enter Travel Destination</label>
                <input type="text" id="to" name="to" required>
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