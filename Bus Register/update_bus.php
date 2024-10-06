<?php
include '../config.php';

// Check if 'id' is present and valid in POST or GET
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
} else {
    // Redirect or handle the error if 'id' is not valid
    header("Location: index.php");
    exit();
}

// Fetch bus details if GET request (initial load)
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Prepare the statement to get bus details
    $stmt = $conn->prepare("SELECT * FROM bus WHERE busID = ?");
    $stmt->bind_param("i", $id); 
    $stmt->execute();
    $result = $stmt->get_result();

    // Fetch bus details
    $bus = $result->fetch_assoc();
    
    // If no bus is found, handle error
    if (!$bus) {
        echo "Bus not found.";
        exit();
    }
}

// Handle the POST request (when the form is submitted)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST['num'];
    $busOwner = $_POST['busOwner'];
    $route = $_POST['route'];
    $price = $_POST['price'];
    $seatCount = $_POST['seatCount'];
    $status = $_POST['status'];
    $time = $_POST['time'];

    // Prepare the update statement
    $stmt = $conn->prepare("UPDATE bus SET busNum = ?, busOwner = ?, route = ?, price = ?, seatCount = ?, status = ?, time = ? WHERE busID = ?");
    $stmt->bind_param("sssdissi", $num, $busOwner, $route, $price, $seatCount, $status, $time, $id); // Bind parameters
    
    // Execute the update query
    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating the bus.";
    }
}

?>

<?php include("header.php"); ?>

<link rel="stylesheet" href="style.css">

<a style="padding:0px;color:red; background-color:white;" href="index.php">◀ Return to Bus List</a>


<h1><center>Update Bus Details<center></h1>

<form method="POST">

<div class="UpdateContent">

    <label>Bus Number:</label>
    <input type="text" name="num" value="<?php echo htmlspecialchars($bus['busNum']); ?>" required>

    <label>Bus Owner:</label>
    <input type="text" name="busOwner" value="<?php echo htmlspecialchars($bus['busOwner']); ?>" required>

    <label>Route:</label>
    <input type="text" name="route" value="<?php echo htmlspecialchars($bus['route']); ?>" required>

    <label>Price:</label>
    <input type="text" name="price" value="<?php echo htmlspecialchars($bus['price']); ?>" required>

    <label>Seat Count:</label>
    <input type="number" name="seatCount" value="<?php echo htmlspecialchars($bus['seatCount']); ?>" required>

    <label>Status: </label>
    <select name="status" style="width:200px" required>
        <option value="None"></option>
        <option value="Available">Available</option>
        <option value="Unavailable">Unavailable</option>
    </select>

    <label>Time:</label>
    <input type="text" name="time" value="<?php echo htmlspecialchars($bus['time']); ?>" required>
    
    <input type="submit" value="Update Bus">
</div>
</form>
<br><br><br><br>
<?php include("../Headers-Footers/footer.php"); ?>
