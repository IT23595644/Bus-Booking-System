<?php
    include('config.php');
?>

<?php
    if(isset($_GET["submit"])){
        $name=$_GET["name"];
        $email=$_GET["email"];
        $message=$_GET["msg"];

        if(empty($name)){
            echo'<script>confirm("Name missing")</script>';
            header("location: ContactUs.php" );
        }
        elseif(empty($email)){
            echo"email missing";
        }
        elseif(empty($message)){
            echo"message missing";
        }
        else{
            $sql="INSERT INTO questions(name,email,msg)
                  values('$name','$email','$message')";
                  echo"You are Registered";
        }
        
           

        }

            
        
    
    
    mysqli_close($conn);
?>