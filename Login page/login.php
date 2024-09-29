<?php
session_start();

include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM logindetails WHERE '$user' = userName AND '$pass' =  password";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count<1){

        echo '<script>
            window.location.href = "index.php";
            alert("Login failed. Invalid Username or Password!");
            </script>';

    }
    
    else {

        header("location : welcome.php");

    }

}

?>