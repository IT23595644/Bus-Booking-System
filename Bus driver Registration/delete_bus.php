<?php
// Include the database connection
include 'db_connection.php';

// Check if 'id' is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the delete query
    $deleteQuery = "DELETE FROM drivers WHERE id = ?";
    $stmt = $conn->prepare($deleteQuery);
    $stmt->bind_param("i", $id);

    // Execute the delete query
    if ($stmt->execute()) {
        // Redirect after successful deletion
        header("Location: driver_management.php?message=Driver deleted successfully");
    } else {
        echo "Error deleting driver: " . $conn->error;
    }
} else {
    echo "Invalid request!";
}
?>
