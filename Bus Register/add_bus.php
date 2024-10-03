<?php
include '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST['busNum'];
    $busOwner = $_POST['busOwner'];
    $route = $_POST['route'];
    $price = $_POST['price'];
    $seatCount = $_POST['seatCount'];
    $status = $_POST['status'];

    $stmt = $conn->prepare("INSERT INTO bus (busNum, busOwner, route, price, seatCount, status) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$num, $busOwner, $route, $price, $seatCount, $status]);

           

    $sql1="INSERT INTO busPrice (price)
           VALUES('$price')";
    mysqli_query($conn,$sql1);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Bus</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Add New Bus</h1>
<form method="POST">
    <label>Bus Number:</label>
    <input type="text" name="busNum" required>
    
    <label>Bus Owner:</label>
    <input type="text" name="busOwner" required>
    
    <label>Route:</label>
    <input type="number" name="route" required>
    
    <label>Price:</label>
    <input type="number" name="price" required>
    
    <label>Seat Count:</label>
    <input type="number" name="seatCount" required>
    
    <label>Status:</label>
    <input type="text" name="status" required>

    <label>Time:</label>
    <input type="text" name="time" required>

    <input type="submit" value="Add Bus">
</form>

<a href="index.php">Back to Bus List</a>

</body>
</html>
