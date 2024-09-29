<?php

   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        if (isset($_POST['nic'], $_POST['from'], $_POST['to'], $_POST['passengers'], $_POST['date'])) {
            $nic = $_POST['nic'];
            $location = $_POST['from'];
            $destination = $_POST['to'];
            $passenger = $_POST['passengers'];
            $date = $_POST['date'];

            $sql = "INSERT INTO seat_booking_history (NIC, Location, Destination, No_of_passengers, Date)
                    VALUES ('$nic', '$location', '$destination', '$passenger', '$date')";
            mysqli_query($conn, $sql);
                        
            header("Location: Payment_page/payment.html");
            exit();
        } 
    }
?>
