<?php
     include("config.php"); //Database connection
?>

<?php 
    include("Headers-Footers/header.php"); //Header file
?>
    
    <link rel="stylesheet" href="Seat Booking page/seat_booking.css">

    <div class="container">
        <br><br>
        <div class="title-main">
            <h1>Book Your Seats</h1>
        </div>
        
        <div class="main-section">
            <div class="image-section">
                <img src="Seat Booking page/image.jpg" width="350px" height="340px">
            
            </div>

            <div class="booking-form">
            
                <div class="title-sub">
                <center> <h3>Booking Details</h3> </center>
                </div>
                
                <div>
                    <form name="form" method="POST" id="form">
                        
                        <div class="form-group">
                            <label for="from">From</label>
                            <input type="text" id="from" name="from">
                            <div id="location_error"></div>
                        </div>

                        <div class="form-group">
                            <label for="to">To</label>
                            <input type="text" id="to" name="to">
                            <div id="destination_error"></div>
                        </div>

                        <div class="form-group">
                            <label for="d_date">Departure Date</label>
                            <input type="date" id="d_date" name="d_date">
                            <div id="d_date_error"></div>
                        </div>

                        <div class="form-group">
                            <label for="seat_no">Seat No</label>
                            <input type="seat_no" id="seatnum" name="seat_no">
                            <div id="seatnum_error"></div>
                        </div>
                        
                        <div class="form-group">
                            <label for="bus_id">Bus ID</label>
                            <input type="bus_id" id="busid" name="bus_id" style="width:330px;">
                            <div id="busid_error"></div>
                        </div>
                    
                        <div class="actions">
                            <button type="submit" class="confirm">Confirm</button>
                            <button type="button" class="back" onclick="location.href='index.php'" >Back</button>
                        </div>

                        <a href="schedule.php" style="margin-left:5px;">Click here for scheduling details(Bus Id etc.)</a> <br>

                        <script src="Seat Booking Page/form_validation.js"></script> 

                        <?php
                            include("Seat Booking page/booking_create.php");
                        ?>

                    
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
    include("Headers-Footers/footer.php");  //Footer file
?>
