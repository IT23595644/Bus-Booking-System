<?php
    include("Headers-Footers/header.php");
?>

<link rel="stylesheet" href="Admin dashboard/admin_styles.css"> 
<script src="Admin dashboard/admin.js"></script>

<div class="title">
    <h1>Admin Dashboard</h1>
</div>

<div class="box">
    <h3>Seat Booking Details<h3>
    <hr><br>
    <div class="button1">
        <button type="button" class="button" onclick="document.location='Seat Booking page/booking_details.php'">Show Details</button>
        <button type="button" class="button" onclick="document.location='index.php'">Back</button>
    </div>
</div>

<div class="box">
    <h3>User Reviews<h3>
    <hr><br>
    <div class="button2">
        <button type="button" class="button">Details</button>
        <button type="button" class="button">Update</button>
        <button type="button" class="button">Delete</button>
    </div>
</div>

<div class="box">
    <h3>Payment Details<h3>
    <hr><br>
    <div class="button3">
        <button type="button" class="button">Details</button>
        <button type="button" class="button">Update</button>
        <button type="button" class="button">Delete</button>
    </div>
</div>

<div class="box">
    <h3>Bus Details<h3>
    <hr><br>
    <div class="button4">
        <button type="button" class="button"><a href="Bus Register/index.php">Details<a></button>
        <button type="button" class="button">Update</button>
        <button type="button" class="button">Delete</button>
    </div>
</div>

<br>
    
<?php
    include("Headers-Footers/footer.php");
?>