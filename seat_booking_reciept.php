<?php
     include("config.php"); //Database connection
?>

<?php 
    include("Headers-Footers/header.php"); //Header file
?>
    
    <link rel="stylesheet" href="PaymentReciept/seat_booking_reciept.css">
<div class="body1234">
    <br><br>
    <div class="title">
        <h1 class="reciept_title" style="margin-bottom: 10px;">Payment Receipt</h1>
    </div>
    
    <div class="main-section">
        
            <div class="booking-form">
           
                    <?php 
                    
                        $bid=$_SESSION["bookid"]; //assigning value to the $bid, which is already got from booking_create.php
                        
                        //fetching data from table seatbooks
                         $sql2="SELECT * from seatbooks where bookingId= '$bid'";
                         $result2=mysqli_query(  $conn,$sql2) ;
                         $row2=mysqli_fetch_assoc($result2);

                         $pseatNum=$row2['seatNum'];
                         $plocation=$row2['Location'];
                         $pdestination=$row2['Destination'];
                         $pbusid=$row2['busId'];
                         $pddate=$row2['d_date'];

                        //fetching price from table busprice
                         $sql1="SELECT * FROM busprice where busID='{$row2['busId']}'";
                         $result=mysqli_query($conn,$sql1) ;  
                         $row=mysqli_fetch_assoc($result);
                         $price=$row['price'];

                         mysqli_close($conn);
                    ?>
                
                    <div class="form">
                        
                    
                     <div class="form-group">
                        <label for="from" class="info">From:</label>
                        <label for="bus_id"><?php echo"$plocation"?></label>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="to" class="info">To:</label>
                        <label for="bus_id"><?php echo"$pdestination"?></label>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="d_date" class="info">Departure Date:</label>
                        <label for="bus_id"><?php echo"$pddate"?></label>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="seat_no" class="info">Seat No:</label>
                        <label for="bus_id"><?php echo"$pseatNum"?></label>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="bus_id" class="info">Bus ID:</label>
                        <label for="bus_id"><?php echo"$pbusid"?></label>
                    </div>
                    <div class="form-group">
                        <label for="bus_id" class="info">Price:</label>
                        <label for="bus_id">Rs.<?php echo"$price"?>/=</label>
                    </div>
                    
                     <div class="actions">
                        <button type="submit" class="confirm" onclick="document.location='./PaymentPage/payment.php'">Checkout</button>
                        <button onclick="location.href='seat_booking.php'" type="button" class="back">Back</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
</div> 

<?php
    include("Headers-Footers/footer.php");  //Footer file
?>
