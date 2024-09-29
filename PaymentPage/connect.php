<?php

$servername = "localhost";  // or your database host
$username = "root";         // your database username
$password = "";             // your database password (often empty for localhost)
$database = "payment";  // the database you're connecting to

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

if(!$conn){
    die("No connection");
}
/* if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} */
?>
