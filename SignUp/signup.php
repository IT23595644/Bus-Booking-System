<?php
include('../config.php');

//
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $repass = $_POST['confirm_password'];


    if($pass == $repass && !is_numeric($first_name) && !is_numeric($last_name)){
        
        $final_pass = $pass;
    
        //add data to database
        $sql = "INSERT INTO users (firstName, lastName, UserName, email, password) VALUES ('$first_name', '$last_name', '$user', '$email', '$final_pass')";

        $result = mysqli_query($conn, $sql);

        // if data pass to database successfully
        if ($result) {
            echo "<script>alert('Registration successful! Please login using your credentials.'); window.location.href = '../Login page/index.php';</script>";
        } else {
            echo "Error";
        }

    }

    mysqli_close($conn);

}
?>
