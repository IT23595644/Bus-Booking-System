<?php
include '../config.php';

$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM bus WHERE busID = ?");
$stmt->execute([$id]);

header("Location: index.php");
?>
