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

    $stmt = $conn->prepare("INSERT INTO bus (busNum, busOwner, route, price, seatCount, status, time) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$num, $busOwner, $route, $price, $seatCount, $status, $time]);

           

    $sql1="INSERT INTO busPrice (price)
           VALUES('$price')";
    mysqli_query($conn,$sql1);

    header("Location: index.php");
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
<form method="POST">
    <label>Bus Number:</label>
    <input type="text" name="busNum" required>
    
    <label>Bus Owner:</label>
    <input type="text" name="busOwner" required>
    
    <label>Route:</label>
    <input type="text" name="route" id="route" required>
    
    <label>Price:</label>
    <input type="number" name="price" id="price" required>
    
    <label>Seat Count:</label>
    <input type="number" name="seatCount" id="seatCount" required>
    
    <label>Status: </label>
    <select name="status" style="width:200px">
        <option value="None"></option>
        <option value="Available">Available</option>
        <option value="Unavailable">Unavailable</option>
    </select>

    <label>Time:</label>
    <input type="text" name="time" required>

    <center><input type="submit" value="Add Bus" onclick="AddBus()"></center>
</form>

</div>
<br><br><br><br>
<?php include("../Headers-Footers/footer.php"); ?>
