<?php

include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM logindetails WHERE userName = '$user';";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        
        if($row["password"]==$pass){
            session_start();
            $_SESSION["username"]=$row["userName"];
            $_SESSION["password"]=$row["password"];

            
            header("location:../homepage/home.html");

        }
        else{
            
            header("location: index.php?error=incorrectpassword");
            
        }
    }
    else{
        echo "<script>
                alert('UserNotfound');
        </script>";
    }
    
/*
    if($count<1){

        echo '<script>
            window.location.href = "index.php";
            alert("Login failed. Invalid Username or Password!");
            </script>';

    }
    
    else {

        header("location : welcome.php");

    }*/

}

?>