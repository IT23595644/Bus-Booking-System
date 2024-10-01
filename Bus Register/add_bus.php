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
    <label for="name">Bus Number:</label>
    <input type="text" name="busNum" required>
    
    <label for="route">Bus Owner:</label>
    <input type="text" name="busOwner" required>
    
    <label for="capacity">Route:</label>
    <input type="number" name="route" required>
    
    <label for="price">Price:</label>
    <input type="number" name="price" required>
    
    <label for="seatCount">Seat Count:</label>
    <input type="number" name="seatCount" required>
    
    <label for="status">Status:</label>
    <input type="text" name="status" required>

    <input type="submit" value="Add Bus">
</form>

<a href="index.php">Back to Bus List</a>

</body>
</html>
