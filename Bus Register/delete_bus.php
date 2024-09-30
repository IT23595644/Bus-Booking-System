<?php
include '../config.php';

$id = $_GET['busID'];
$stmt = $conn->prepare("DELETE FROM buses WHERE busID = ?");
$stmt->execute([$id]);

header("Location: index.php");
?>
