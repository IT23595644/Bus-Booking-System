<?php

include("../config.php");

//get data from the form to validation

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    //search for same username in database 
    $sql = "SELECT * FROM users WHERE userName = '$user';";
    $result = mysqli_query($conn,$sql);

    //if there no any username same
    if(mysqli_num_rows($result)==0){
        echo "<script>
                alert('User does not exist');
                window.location.href = 'index.php';
            </script>";
    }

    //if there found any username from the database
    else if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        
        //password match with username
        if($row["password"]==$pass){
            session_start();
            $_SESSION["username"]=$row["userName"];
            $_SESSION["password"]=$row["password"];
            $_SESSION["userId"]=$row["userId"];

            
            header("location:../index.php");

        }

        //if password incorrect
        else{
            
            echo "<script>
                    alert('Incorrect Password');
                    window.location.href = 'index.php';
                </script>";

        }
    }
   
}

?>