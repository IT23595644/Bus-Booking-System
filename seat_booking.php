<?php
     include("config.php"); //Database connection
?>

<?php 
    include("Headers-Footers/header.php"); //Header file
?>
    
    <link rel="stylesheet" href="Seat Booking page/seat_booking.css">
    <script src="Seat Booking page/seat_booking.js"></script>

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
                <div class="tab active">Customer Details</div>
            </div>
            
            <div id="Customer Details" class="tabcontent">
                
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
                        <label for="passengers">No of passengers</label>
                        <input type="text" id="passengers" name="passengers">
                    </div>

                    <div class="form-group">
                        <label for="seat_no">Seat No</label>
                        <input type="seat_no" id="seat_no" name="seat_no" style="width:290px;">
                    </div>
                    
                    <div class="form-group">
                        <label for="bus_id">Bus ID</label>
                        <input type="bus_id" id="bus_id" name="bus_id" style="width:300px;">
                    </div>
                                 
                    <div class="actions">
                        <button type="submit" class="confirm">Confirm</button>
                        <button onclick="location.href='index.php'" type="button" class="back">Back</button>
                    </div>

                    <?php
                        include("Seat Booking page/functions.php");
                    ?>

                </form>
            </div>
        </div>
    </div>
   
<?php
    include("Headers-Footers/footer.php");  //Footer file
?>
