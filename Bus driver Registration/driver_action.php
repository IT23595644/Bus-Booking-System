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


if (isset($_GET['action']) && $_GET['action'] === 'edit' && isset($_GET['id'])) {
    $stmt = $conn->prepare("SELECT * FROM drivers WHERE id=?");
    $stmt->bind_param("i", $_GET['id']);
    $stmt->execute();
    $result = $stmt->get_result();
    $driver = $result->fetch_assoc(); 
    echo json_encode($driver);
    exit();
}


if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
    $stmt = $conn->prepare("DELETE FROM drivers WHERE id=?");
    $stmt->bind_param("i", $_GET['id']);
    
    if ($stmt->execute()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => $stmt->error]);
    }
    
    exit();
}
?>
