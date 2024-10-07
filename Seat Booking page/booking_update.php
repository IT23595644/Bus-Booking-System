<?php 
    include ('../config.php');
        
        if(isset($_GET['updateid'])){   //Auto fill details of the update form
            $id=$_GET['updateid'];  
            
        $sql="SELECT * FROM seatbooks where bookingId=$id";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);

        $seatNum=$row['seatNum'];
        $busId=$row['busId'];
        $location=$row['Location'];
        $destination=$row['Destination'];
        $d_date=$row['d_date'];
        
        }   
        
        if($_SERVER["REQUEST_METHOD"]=="POST")  //update the details of the seatbooks table after user enters an input
        {   
            
            $bookFrom=$_POST["from"];
            $bookTo=$_POST["to"];
            $bookd_date=$_POST["d_date"];
            $bookSeatnum=$_POST["seatnum"];
            $bookBusid=$_POST["busid"];

            $sql="UPDATE seatbooks  SET Location='$bookFrom',Destination='$bookTo',d_date='$bookd_date',seatNum='$bookSeatnum',busId='$bookBusid' WHERE bookingId='$id';";

            $result=mysqli_query($conn,$sql);
            if($result)
            {
                header("location: booking_details.php");
            }

            mysqli_close($conn);

        }

?>


<?php
    include("header.php");
?>

    <link rel="stylesheet" href="./booking_update.css"> 
     

    <div class="title">
        <h1>Update Seat Booking Details</h1>
    </div>
    

    <div class="form-container">      
        
        <div class="form">
            <form method="post" id="form">
                
                <div class="form-group">
                    <label>From:</label><br>
                    <input type="text" name="from" id="from" value="<?php echo $location?>"><br>
                    <div id="location_error"></div><br>
                </div>
               

                <div class="form-group">
                    <label>To:</label><br>
                    <input type="text" name="to" id="to" value="<?php echo $destination?>"><br>
                    <div id="destination_error"></div><br>
                </div>
                
                <div class="form-group">
                    <label>Departure Date:</label><br>
                    <input type="date" name="d_date" id="d_date" value="<?php echo $d_date?>"><br>
                    <div id="d_date_error"></div><br>
                </div>
                
                <div class="form-group">
                    <label>Seat No:</label><br>
                    <input type="text" name="seatnum" id="seatnum" value="<?php echo $seatNum?>"><br>
                    <div id="seatnum_error"></div><br>
                </div>
                
                <div class="form-group">
                    <label>Bus ID:</label><br>
                    <input type="text" name="busid" id="busid" value="<?php echo $busId?>"><br><br>
                    <div id="busid_error"></div><br>
                </div>
                
                <input class="button" type="submit" name="submit" value="Update">    
                
                <script src="./form_validation.js"></script>           

            </form>
        </div>

    </div>
    
    <br><br><br><br>
    
<?php
    include("../Headers-Footers/footer.php");
?>



