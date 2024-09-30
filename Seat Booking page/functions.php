<?php

   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        if (isset($_POST['from'], $_POST['to'], $_POST['passengers'], $_POST['seat_no'], $_POST['bus_id'])) {
            $location = $_POST['from'];
            $destination = $_POST['to'];
            $passengers = $_POST['passengers'];
            $seat_no = $_POST['seat_no'];
            $bus_id = $_POST['bus_id'];
    

            $sql = "INSERT INTO test_seatbooking (seatNum, busId, Location, Destination, Passengers)
                    VALUES ('$seat_no', '$bus_id', '$location', '$destination', '$passengers')";
            
            mysqli_query(mysql: $conn, query: $sql);
                        
            echo"<script> location.replace('index.php'); </script>";
        } 
    }
?>
