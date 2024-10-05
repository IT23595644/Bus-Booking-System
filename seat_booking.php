<?php
     include("config.php"); //Database connection
?>

<?php 
    include("Headers-Footers/header.php"); //Header file
?>
    
    <link rel="stylesheet" href="Seat Booking page/seat_booking.css">
    <div class="body1234"
    <br><br>
    <div class="title">
        <h1>Book Your Seats</h1>
    </div>
    
    <div class="main-section">
        <div class="image-section">
            <img src="Seat Booking page/image.jpg" width="340px" height="336px">
        
        </div>

        <div class="booking-form">
           
            <div class="title-sub">
               <center> <h2>Booking Details</h2> </center>
            </div>
            
            <div>
                
                <form method="POST" >
                    
                     <div class="form-group">
                        <label for="from">From</label>
                        <input type="text" id="from" name="from">
                    </div>

                    <div class="form-group">
                        <label for="to">To</label>
                        <input type="text" id="to" name="to">
                    </div>

                    <div class="form-group">
                        <label for="d_date">Departure Date</label>
                        <input type="date" id="d_date" name="d_date" value="2024-10-01" style="width:100%;">
                    </div>

                    <div class="form-group">
                        <label for="seat_no">Seat No</label>
                        <input type="seat_no" id="seat_no" name="seat_no">
                    </div>
                    
                    <div class="form-group">
                        <label for="bus_id">Bus ID</label>
                        <input type="bus_id" id="bus_id" name="bus_id" style="width:315px;">
                    </div>
                   
                     <div class="actions">
                        <button type="submit" class="confirm">Confirm</button>
                        <button onclick="location.href='index.php'" type="button" class="back">Back</button>
                    </div>

                    <a href="schedule.php" style="margin-left:5px;">Click here for scheduling details(Bus Id etc.)</a>

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
