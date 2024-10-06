<?php
    session_start();
    if(!isset($_SESSION["username"]))
    {
        header("location: Login page/index.php");
        exit();
    }
    include("UserDashboard/header.php");
?>

    <link rel="stylesheet" href="./UserDashboard/userdashboard.css"> 

    <div class="title">
        <h1>User Dashboard</h1>
    </div>
    <div class="logdetails">
        <h4>Welcome...!<h4>
        <h4><?php echo"{$_SESSION['username']}";?><h4>
        
    </div>

    <div class="box">
        <h3>Booking Details<h3>
        <hr><br>
        <div class="button1">
            <button type="button" class="button" onclick="document.location='Seat Booking page/booking_details.php'">Show Details</button>
            <button type="button" class="button" onclick="document.location='index.php'">Back</button>
        </div>
    </div>

    <div class="box">
        <h3>Payment Details<h3>
        <hr><br>
        <div class="button1">
            <button type="button" class="button" onclick="document.location='PaymentPage/paymentDetails.php'">Show Details</button>
            <button type="button" class="button" onclick="document.location='index.php'">Back</button>
        </div>
    </div>
    
    <br>
    
<?php
    include("Headers-Footers/footer.php");
?>