<?php

   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        if (isset($_POST['from'], $_POST['to'], $_POST['d_date'], $_POST['seat_no'], $_POST['bus_id'])) {
            $location = $_POST['from'];
            $destination = $_POST['to'];
            $d_date = $_POST['d_date'];
            $seat_no = $_POST['seat_no'];
            $bus_id = $_POST['bus_id'];
            $uid=$_SESSION["userId"];
    

            $sql = "INSERT INTO seatbooks (seatNum, busId,userId, Location, Destination, d_date)
                    VALUES ('$seat_no', '$bus_id','$uid', '$location', '$destination', '$d_date')";
           
            mysqli_query(mysql: $conn, query: $sql);

            $sql2="SELECT MAX(bookingId) as 'id' FROM seatbooks ";
            
            $result=mysqli_query($conn,$sql2);
            $row=mysqli_fetch_assoc($result);
            $_SESSION['bookid']=$row['id'];
            
                      
            echo"<script> location.replace('seat_booking_reciept.php'); </script>";
        } 
    }
?>
