<?php
include '../config.php';

$id = $_GET['id'];
$sql = "DELETE FROM bus WHERE busID = '$id'";
$result = mysqli_query($conn, $sql);

header("location: index.php");

?>
