<?php

   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        if (isset($_POST['nic'], $_POST['from'], $_POST['to'], $_POST['passengers'], $_POST['date'])) {
            $seat_no = $_POST['seat_no'];
            $date = $_POST['date'];
            $nic = $_POST['nic'];
    

            $sql = "INSERT INTO seatbooks (seatNum, date, NIC)
                    VALUES ('$seat_no', '$date', '$nic')";
            mysqli_query(mysql: $conn, query: $sql);
                        
            echo"<script> location.replace('index.php'); </script>";
        } 
    }
?>
