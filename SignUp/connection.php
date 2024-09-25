<?php

$host = 'localhost';
$db_name = 'Bus365';
$username = 'root'; 
$password = '';     

// Create connection
$conn = new mysqli($host, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>