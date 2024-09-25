<?php

include('connection.php');

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $user = trim($_POST['username']);
    $email = trim($_POST['email']);
    $pass = $_POST['password'];
    $confirm_pass = $_POST['confirm_password'];

    // Check if passwords match
    if ($pass !== $confirm_pass) {
        die("Error: Passwords do not match.");
    }

    // Hash the password
    $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, username, email, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $first_name, $last_name, $user, $email, $hashed_pass);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
}

$conn->close();
?>
