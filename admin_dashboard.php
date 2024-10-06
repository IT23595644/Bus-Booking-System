<?php
    session_start();
    if(!isset($_SESSION["adminName"]))
    {
        header("location: Login page/index.php");
    }
    include("Headers-Footers/header2.php");
?>

<link rel="stylesheet" href="Admin dashboard/admin_styles.css"> 
<script src="Admin dashboard/admin.js"></script>

<div class="title">
    <h1>Admin Dashboard</h1>
</div>

<div class="box">
    <h3>Bus driver Details<h3>
    <hr><br>
    <div class="button1">
        <button type="button" class="button" onclick="document.location='./Driver register Crud/adddrive.php'">Show Details</button>
        <button type="button" class="button" onclick="document.location='index.php'">Back</button>
    </div>
</div>

<div class="box">
    <h3>Customer Supporter Details<h3>
    <hr><br>
    <div class="button1">
        <button type="button" class="button" onclick="document.location='./customersupporter/customerview.php'">Show Details</button>
        <button type="button" class="button" onclick="document.location='index.php'">Back</button>
    </div>
</div>

<div class="box">
    <h3>Bus Details<h3>
    <hr><br>
    <div class="button4">
        <button type="button" class="button" onclick="document.location='./Bus Register/index.php'">Show Details</button>
        <button type="button" class="button" onclick="document.location='index.php'">Back</button>
    </div>
</div>

<div class="box">
    <h3>Seat Booking History<h3> 
    <hr><br>
    <div class="button3">
    <button type="button" class="button" onclick="document.location='./Seat Booking page/booking_history.php'">Show Details</button>
    <button type="button" class="button" onclick="document.location='index.php'">Back</button>
    </div>
</div>

<div class="box">
    <h3>User Messages<h3> 
    <hr><br>
    <div class="button3">
    <button type="button" class="button" onclick="document.location='userMessages/messagesview.php'">Show Details</button>
    <button type="button" class="button" onclick="document.location='index.php'">Back</button>
    </div>
</div>



<br>
    
<?php
    include("Headers-Footers/footer.php");
?>