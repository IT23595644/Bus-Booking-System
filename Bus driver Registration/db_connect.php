<?php

$host = 'localhost';
$dbname = 'bus_system';
$user = 'root';
$password = '';

$conn=new mysqli($host,$user,$password,$dbname);
if($conn->connect_error){
    die("Connection Failed: ".$connect->connect_error);
}
?>