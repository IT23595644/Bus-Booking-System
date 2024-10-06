<?php
include '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST['busNum'];
    $busOwner = $_POST['busOwner'];
    $route = $_POST['route'];
    $price = $_POST['price'];
    $seatCount = $_POST['seatCount'];
    $status = $_POST['status'];
    $time = $_POST['time'];

    $sql = "INSERT INTO bus (busNum, busOwner, route, price, seatCount, status, time) 
    VALUES ('$num', '$busOwner', '$route', '$price', '$seatCount', '$status', '$time')";
    
    $result=mysqli_query($conn,$sql);       


    $sql1="INSERT INTO busPrice (price)
           VALUES('$price')";
    mysqli_query($conn,$sql1);

    header("Location: index.php");

    mysqli_close($conn);

}
?>

<?php include("header.php"); ?>
<link rel="stylesheet" href="style.css">
    <style>
        label{
            font-size:15px;
        }
    </style>
<script src="script.js"></script>

<a style="padding:0px;color:red; background-color:white;" href="index.php">◀ Return to Bus List</a>
<h1><center>Add New Bus</center></h1>
<div class="addContent">
<form method="POST" id="addBusForm">
    <label>Bus Number:</label>
    <input type="text" name="busNum" id="busNum" placeholder="Like (LP-1234)"required>
    
    <label>Bus Owner:</label>
    <input type="text" name="busOwner" required>
    
    <label>Route:</label>
    <input type="text" name="route" id="route" required>
    
    <label>Price:</label>
    <input type="number" name="price" id="price" required>
    
    <label>Seat Count:</label>
    <input type="number" name="seatCount" id="seatCount" placeholder="0-100" required>
    
    <label>Status: </label>
    <select name="status" style="width:200px">
        <option value="None"></option>
        <option value="Available">Available</option>
        <option value="Unavailable">Unavailable</option>
    </select>

    <label>Time:</label>
    <input type="text" name="time" id="time" placeholder="0-24" required>

    <center><input type="submit" value="Add Bus" onclick="AddBus(event)"></center>
</form>

</div>
<br><br><br><br>
<?php include("../Headers-Footers/footer.php"); ?>
