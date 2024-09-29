<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $route = $_POST['route'];
    $capacity = $_POST['capacity'];

    $stmt = $pdo->prepare("INSERT INTO buses (name, route, capacity) VALUES (?, ?, ?)");
    $stmt->execute([$name, $route, $capacity]);

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
    <label for="name">Bus Name:</label>
    <input type="text" name="name" required>
    
    <label for="route">Route:</label>
    <input type="text" name="route" required>
    
    <label for="capacity">Capacity:</label>
    <input type="number" name="capacity" required>
    
    <input type="submit" value="Add Bus">
</form>

<a href="index.php">Back to Bus List</a>

</body>
</html>
