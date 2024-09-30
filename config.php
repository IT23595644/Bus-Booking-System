<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "bus365";

    $conn= new mysqli ("$host","$username","$password","$db");

    if($conn->connect_error){

            die('Data base not connected!' . $conn->connect_error);

    }

?>