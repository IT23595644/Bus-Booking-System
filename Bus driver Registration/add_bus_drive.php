<?php
include 'db_connect.php';

if (isset($_POST['save_driver'])) {
   
   if (empty($_POST['id'])) {
       
       $stmt = $conn->prepare("INSERT INTO drivers (name, address, phone) VALUES (?, ?, ?)");
       $stmt->bind_param("sss", $_POST['name'], $_POST['address'], $_POST['phone']); 
       $stmt->execute();
   } else {
       
       $stmt = $conn->prepare("UPDATE drivers SET name=?, address=?, phone=? WHERE id=?");
       $stmt->bind_param("sssi", $_POST['name'], $_POST['address'], $_POST['phone'], $_POST['id']); 
       $stmt->execute();
   }
   header("Location: admin_driver_management.php");
   exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Management</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form id="driver-form" method="POST" action="driver_action.php">
                <input type="hidden" name="id" id="driver_id">
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div>
                    <label for="address">Address:</label>
                    <textarea id="address" name="address"></textarea>
                </div>
                <div>
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone">
                </div>
                <div>
                    <button type="submit" name="save_driver">Save Driver</button>
                </div>
     </form>