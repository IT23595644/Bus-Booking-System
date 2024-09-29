<?php
     include("database.php");
?>

<?php 
include("Headers-Footers/header.php");
?>
    <link rel="stylesheet" href="Seat Booking page/seat_booking.css">
    <script src="Seat Booking page/seat_booking.js"></script>

    <header>
        <div class="logo">LOGO</div>
        <nav>
            <ul>
                <li><a href="homepage/home.html">Home</a></li>
                <li><a href="#">Scheduling</a></li>
                <li><a href="#">Booking</a></li>
                <li><a href="#">About</a></li>
                <li><a href="Contact Us page/contt us.html">Contact us</a></li>
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
            <img src="Seat Booking page/e.png" alt="bus_art" height="300px" width="375px">
        </div>

        <div class="booking-form">
           
            <div class="tabs">
                <div class="tab active" onclick="openTab(event,'Customer Details')">Customer Details</div>
            </div>
            
            <div id="Customer Details" class="tabcontent">
                
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
                        <button onclick="location.href='homepage/home.html'" type="button" class="back">Back</button>
                    </div>

                    <?php
                        include("Seat Booking Page/functions.php");
                    ?>

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
