<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        if (isset($_POST['wid'], $_POST['wfrom'], $_POST['wto'], $_POST['wpassengers'], $_POST['wdate'])) {
            $wid = $_POST['wid'];
            $wlocation = $_POST['wfrom'];
            $wdestination = $_POST['wto'];
            $wpassenger = $_POST['wpassengers'];
            $wdate = $_POST['wdate'];

            $sql = "INSERT INTO seat_booking_warrent (Warrent_ID, Location, Destination, No_of_passengers, Date)
                    VALUES ('$wid', '$wlocation', '$wdestination', '$wpassenger', '$wdate')";
            mysqli_query($conn, $sql);
            
            header("Location: ../Payment_page/payment.html");
            exit();
        } 
       mysqli_close($conn);
    }
    
?>


