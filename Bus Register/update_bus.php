<?php
include 'config.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM buses WHERE id = ?");
$stmt->execute([$id]);
$bus = $stmt->fetch();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $route = $_POST['route'];
    $capacity = $_POST['capacity'];

    $stmt = $pdo->prepare("UPDATE buses SET name = ?, route = ?, capacity = ? WHERE id = ?");
    $stmt->execute([$name, $route, $capacity, $id]);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Bus</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Update Bus Details</h1>
<form method="POST">
    <label for="name">Bus Name:</label>
    <input type="text" name="name" value="<?php echo $bus['name']; ?>" required>
    
    <label for="route">Route:</label>
    <input type="text" name="route" value="<?php echo $bus['route']; ?>" required>
    
    <label for="capacity">Capacity:</label>
    <input type="number" name="capacity" value="<?php echo $bus['capacity']; ?>" required>
    
    <input type="submit" value="Update Bus">
</form>

<a href="index.php">Back to Bus List</a>

</body>
</html>
