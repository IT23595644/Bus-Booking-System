<?php
include('connection.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $repass = $_POST['confirm_password'];

    
    if ($pass !== $repass) {
        echo "<script>alert('Passwords do not match!');</script>";
    } else {
        
        $final_pass = $pass;

    
        $stmt = $conn->prepare("INSERT INTO users (firstName, lastName, UserName, email, password) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $first_name, $last_name, $user, $email, $final_pass);

        
        if ($stmt->execute()) {
            echo "<script>alert('Registration successful! Please login using your credentials.'); window.location.href = '../Login page/index.php';</script>";
        } else {
            echo "Error: " . $stmt->error;
        }

        
        $stmt->close();
    }
}

$conn->close();
?>
