<?php 
    include ('../config.php');
        
        if(isset($_GET['updateid'])){   
            $id=$_GET['updateid'];
        $sql="SELECT * FROM seatbooks where bookingId=$id";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);

        $seatNum=$row['seatNum'];
        $date=$row['date'];
        $busId=$row['busId'];
        $location=$row['Location'];
        $destination=$row['Destination'];
        $d_date=$row['d_date'];
        
        }   
        
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {   
            
            $bookFrom=$_POST["from"];
            $bookTo=$_POST["to"];
            $bookd_date=$_POST["d_date"];
            $bookSeatnum=$_POST["seatnum"];
            $bookBusid=$_POST["busid"];
            /* echo $bookFrom ; */
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
    include("../Headers-Footers/header.php");
?>

    <link rel="stylesheet" href="booking_crud.css"> 

    <div class="title">
        <h1>Update Seat Booking Details</h1>
    </div>
    

    <div class="box_update">      
        
        <div class="form">
            <form method="post" style="gap:20px;" >
                
                <label>From:</label><br>
                <input type="text" name="from" ><br>

                <label>To:</label><br>
                <input type="text" name="to" ><br>

                <label>Departure Date:</label><br>
                <input type="date" name="d_date" value="2018-07-22"><br>

                <label>Seat No:</label><br>
                <input type="text" name="seatnum" ><br>

                <label>Bus ID:</label><br>
                <input type="text" name="busid" ><br><br>

                <input class="button_update" type="submit" name="submit" value="Update">               

            </form>
        </div>

    </div>

    

    <br>
    
<?php
    include("../Headers-Footers/footer.php");
?>



