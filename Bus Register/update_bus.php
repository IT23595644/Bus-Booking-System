<?php
include '../config.php';

$id = $_POST['id'];
$stmt = $conn->prepare("SELECT * FROM buses WHERE busID = ?");
$stmt->execute([$id]);
$bus = $stmt->fetch();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST['busNum'];
    $busOwner = $_POST['busOwner'];
    $route = $_POST['route'];
    $price = $_POST['price'];
    $seatCount = $_POST['seatCount'];
    $status = $_POST['status'];

    $stmt = $conn->prepare("UPDATE buses SET busNum = ?, busOwner = ?, route = ?, price = ?, seatCount = ?, status = ? WHERE busID = ?");
    $stmt->execute([$num, $busOwner, $route, $price, $seatCount, $status, $id]);

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
    <label>Bus Number:</label>
    <input type="text" name="num" value="<?php echo $bus['busNum']; ?>" required>

    <label>Bus Owner:</label>
    <input type="text" name="busOwner" value="<?php echo $bus['busOwner']; ?>" required>

    <label>Route:</label>
    <input type="text" name="route" value="<?php echo $bus['route']; ?>" required>

    <label>Price:</label>
    <input type="text" name="price" value="<?php echo $bus['price']; ?>" required>
    
    <label>Seat Count:</label>
    <input type="text" name="seatCount" value="<?php echo $bus['seatCount']; ?>" required>
    
    <label>Status:</label>
    <input type="text" name="status" value="<?php echo $bus['status']; ?>" required>
    
    <input type="submit" value="Update Bus">
</form>

<a href="index.php">Back to Bus List</a>

</body>
</html>
