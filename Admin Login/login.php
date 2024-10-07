<?php

include("../config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    //select data from the databsase
    $sql = "SELECT * FROM admin WHERE userName = '$user';";
    $result = mysqli_query($conn,$sql);
    
    //if didnt found any data 
    if(mysqli_num_rows($result)==0){
        echo "<script>
                alert('User does not exist');
                window.location.href = 'index.php';
            </script>";
    }

    else if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result); //data store like array
        
        if($row["password"]==$pass){
            session_start();
            $_SESSION["adminName"]=$row["userName"];
            $_SESSION["password"]=$row["password"];
            

            echo "<script>
                    alert(Login successfull!);
                    </script>";
            
            header("location:../admin_dashboard.php");

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