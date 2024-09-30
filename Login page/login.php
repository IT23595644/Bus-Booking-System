<?php

include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM users WHERE userName = '$user';";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==0){
        echo "<script>
                alert('User does not exist');
                window.location.href = 'index.php';
            </script>";
    }

    else if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        
        if($row["password"]==$pass){
            session_start();
            $_SESSION["username"]=$row["userName"];
            $_SESSION["password"]=$row["password"];

            
            header("location:../index.php");

        }
        else{
            
            echo "<script>
                    alert('Incorrect Password');
                    window.location.href = 'index.php';
                </script>";

        }
    }
   
}

?>