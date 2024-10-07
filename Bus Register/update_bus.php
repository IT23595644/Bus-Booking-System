<?php
include '../config.php';

// Check if 'id' is present and valid in GET
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

    $sql = "SELECT * FROM bus WHERE busID = '$id'";
    $result = mysqli_query($conn,$sql);
    $bus = mysqli_fetch_assoc($result);

    if(!$bus){
        echo "<script>
                alert('Bus not found!');
                </script>";
        exit();
    }
}

//get the  bus details to updata database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST['num'];
    $busOwner = $_POST['busOwner'];
    $route = $_POST['route'];
    $price = $_POST['price'];
    $seatCount = $_POST['seatCount'];
    $status = $_POST['status'];
    $time = $_POST['time'];

    $sql = "UPDATE bus SET busNum = '$num', busOwner = '$busOwner', route = '$route', price = '$price', seatCount = '$seatCount', status = '$status', time = '$time' WHERE busID = '$id'";

    $result = mysqli_query($conn,$sql);

    // Execute the update query
    if ($result) {
        header("Location: index.php");
    } else {
        echo "Error updating the bus.";
    }

    mysqli_close($conn);

}

?>

<?php include("header.php"); ?>

<link rel="stylesheet" href="style.css">

<a style="padding:0px;color:red; background-color:white;" href="index.php">◀ Return to Bus List</a>


<h1><center>Update Bus Details<center></h1>

<form method="POST">

<div class="UpdateContent">
        
        <label>Bus Number:</label>
        <input type='text' name='num' value='<?php echo htmlspecialchars($bus['busNum']); ?>' required>

        <label>Bus Owner:</label>
        <input type='text' name='busOwner' value='<?php echo htmlspecialchars($bus['busOwner']); ?>' required>

        <label>Route:</label>
        <input type='text' name='route' value='<?php echo htmlspecialchars($bus['route']); ?>' required>

        <label>Price:</label>
        <input type='text' name='price' value='<?php echo htmlspecialchars($bus['price']); ?>' required>

        <label>Seat Count:</label>
        <input type='number' name='seatCount' value='<?php echo htmlspecialchars($bus['seatCount']); ?>' required>

        <label>Status:</label>
        <select name='status' style='width:200px' required>
            <option value='Available' <?php if ($bus['status'] == 'Available') echo 'selected'; ?>>Available</option>
            <option value='Unavailable' <?php if ($bus['status'] == 'Unavailable') echo 'selected'; ?>>Unavailable</option>
        </select>

        <label>Time:</label>
        <input type='text' name='time' value='<?php echo htmlspecialchars($bus['time']); ?>' required>
    
    <input type="submit" value="Update Bus">
</div>
</form>
<br><br><br><br>
<?php include("../Headers-Footers/footer.php"); ?>
