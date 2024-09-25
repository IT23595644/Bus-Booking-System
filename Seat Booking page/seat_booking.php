<?php
     include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book Your Seats</title>
    <link rel="stylesheet" href="seat_booking.css">
    <script src="seat_booking.js"></script>
</head>
<body>

    <header>
        <div class="logo">LOGO</div>
        <nav>
            <ul>
                <li><a href="../homepage/home.html">Home</a></li>
                <li><a href="#">Scheduling</a></li>
                <li><a href="#">Booking</a></li>
                <li><a href="#">About</a></li>
                <li><a href="../Contact Us page/contt us.html">Contact us</a></li>
            </ul>
        </nav>
    </header>

  
    <br><br>
    <div class="title">
        <h1>Book Your Seats</h1>
        <p>You can book both ways</p>
    </div>
    
    <div class="main-section">
        <div class="image-section">
            <img src="e.png" alt="bus_art" height="300px" width="375px">
        </div>

        <div class="booking-form">
           
            <div class="tabs">
                <div class="tab active" onclick="openTab(event,'General Passenger')">General Passenger</div>
                <div class="tab" onclick="openTab(event,'Warrent Passenger')">Warrent Passenger</div>
            </div>
            
            <div id="General Passenger" class="tabcontent">
                
                <form method="POST">
                    
                    <div class="form-group">
                        <label for="nic">NIC</label>
                        <input style="width:100%;" type="text" id="nic" name="nic">
                    </div>

                    <div class="form-group">
                        <label for="from">From</label>
                        <input type="text" id="from" name="from">
                    </div>

                    <div class="form-group">
                        <label for="to">To</label>
                        <input type="text" id="to" name="to">
                    </div>

                    <div class="form-group">
                        <label for="passengers">No of passengers</label>
                        <input type="text" id="passengers" name="passengers">
                    </div>

                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" id="date" value="2024-09-15" name="date" style="width:300px;">
                    </div>
                    
                    <div class="actions">
                        <button type="submit" class="confirm">Confirm</button>
                        <button onclick="location.href='../homepage/home.html'" type="button" class="back">Back</button>
                    </div>

                    <?php
                        include("functions_general.php");
                    ?>

                </form>
            </div>

            <div id="Warrent Passenger" class="tabcontent">
                <form method="POST">
                    
                    <div class="form-group">
                        <label for="id">Warrent ID</label>
                        <input type="text" id="id" name="wid">
                    </div>
                    <div class="form-group">
                        <label for="from">From</label>
                        <input type="text" id="from" name="wfrom">
                    </div>
                    <div class="form-group">
                        <label for="to">To</label>
                        <input type="text" id="to" name="wto">
                    </div>

                    <div class="form-group">
                        <label for="passengers">No of passengers</label>
                        <input type="text" id="passengers" name="wpassengers">
                    </div>

                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" id="date" value="2024-09-15" name="wdate" style="width:300px;">
                    </div>
                    
                    <?php
                        include("functions_warrent.php");
                    ?>
                    
                    <div class="actions">
                        <button type="submit" class="confirm">Confirm</button>
                        <button onclick="location.href='../homepage/home.html'" type="button" class="back">Back</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
   
    <footer>
        &copy; 2024 Website. All rights reserved.
    </footer>
</div>

</body>
</html>
