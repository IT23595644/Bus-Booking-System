<?php
include '../config.php';

//URL pass the id and assign it to $ID
$id = $_GET['id'];
$sql = "DELETE FROM bus WHERE busID = '$id'";
$result = mysqli_query($conn, $sql);

header("location: index.php");

?>
