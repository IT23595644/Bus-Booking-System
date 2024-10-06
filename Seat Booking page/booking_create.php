<?php
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        if (isset($_POST['from'], $_POST['to'], $_POST['d_date'], $_POST['seat_no'], $_POST['bus_id'])) {
            $location = $_POST['from'];
            $destination = $_POST['to'];
            $d_date = $_POST['d_date'];
            $seat_no = $_POST['seat_no'];
            $bus_id = $_POST['bus_id'];

            if(isset($_SESSION["userId"])){  //check whether the user has log in to the system
                $uid=$_SESSION["userId"];
            }
            else{
                $uid="";
            }
            
            $sql = "INSERT INTO seatbooks (seatNum, busId,userId, Location, Destination, d_date)
                    VALUES ('$seat_no', '$bus_id','$uid', '$location', '$destination', '$d_date')";
           
            try {
                mysqli_query( $conn, $sql);
                echo"<script> location.replace('seat_booking_reciept.php'); </script>";
            }
            catch (mysqli_sql_exception) {      
                echo "<script>alert('Please log-in to proceed');</script>";    //if the user has not log in to the system this message will be displayed
                echo"<script> location.replace('seat_booking.php'); </script>";
            }

            
            $sql2="SELECT MAX(bookingId) as 'id' FROM seatbooks "; //selecets the highest value from bookingId column from table seatbooks as id
            
            $result=mysqli_query($conn,$sql2);
            $row=mysqli_fetch_assoc($result);
            $_SESSION['bookid']=$row['id']; 

            mysqli_close($conn);
                      
            
        } 
    }
?>
