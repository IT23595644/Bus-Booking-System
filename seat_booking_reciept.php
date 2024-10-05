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
        <h1>Payment Receipt</h1>
    </div>
    
    <div class="main-section">
        
            <div class="booking-form">
           
            <div class="tabs">
                <div class="tab active">Ticket Details</div>
            </div>
            
            <div id="Customer Details" class="tabcontent">
                    <?php 
                    
                        $bid=$_SESSION["bookid"];
                         /*$sql="SELECT b.price FROM seatbooks s,bus b where b.busID=s.busId and bookingId='$bid'";
                         $result=mysqli_query($conn,$sql) ;  
                         $row=mysqli_fetch_assoc($result);
                         $price=$row['price'];  */
                         
                        
                         $sql2="SELECT * from seatbooks where bookingId= '$bid'";
                         $result2=mysqli_query($conn,$sql2) ;  
                         $row2=mysqli_fetch_assoc($result2);

                         $_SESSION['sNum']=$row2['seatNum'];
                         $_SESSION['locate']=$row2['Location'];
                         $_SESSION['destine']=$row2['Destination'];
                         $_SESSION['bid']=$row2['busId'];

                        //newlycreated New Table for price
                         $sql1="SELECT * FROM busprice where busID='{$row2['busId']}'";
                         $result=mysqli_query($conn,$sql1) ;  
                         $row=mysqli_fetch_assoc($result);
                         $price=$row['price'];

                         mysqli_close($conn);
                    ?>
                
                    <div class="form">
                    
                     <div class="form-group">
                        <label for="from">From</label>
                        <label for="bus_id"><?php echo $_SESSION['locate']?></label>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="to">To</label>
                        <label for="bus_id"><?php echo $_SESSION['destine']?></label>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="d_date">Departure Date</label>
                        <label for="bus_id"><?php echo $_SESSION['destine']?></label>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="seat_no">Seat No</label>
                        <label for="bus_id"><?php echo $_SESSION['sNum']?></label>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="bus_id">Bus ID</label>
                        <label for="bus_id"><?php echo $_SESSION['bid']?></label>
                    </div>
                    <div class="form-group">
                        <label for="bus_id">Price</label>
                        <label for="bus_id"><?php echo"$price"?></label>
                    </div>
                    <br>
                     <div class="actions">
                        <button type="submit" class="confirm" onclick="document.location='./PaymentPage/payment.php'">Checkout</button>
                        <button onclick="location.href='index.php'" type="button" class="back">Back</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
</div> 

<?php
    include("Headers-Footers/footer.php");  //Footer file
?>
