<?php
include 'config.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM buses WHERE id = ?");
$stmt->execute([$id]);

header("Location: index.php");
?>
