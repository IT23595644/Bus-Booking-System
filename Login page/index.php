<?php

    include("config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
<div class="combination">

    <div class="welcome">
        
        <h1>Welcome Back to Bus365!</h1>
        <br><br>
        <p class="welcomeNote"><b>Your journey starts here.</b><br>Log in to access our seamless bus booking and scheduling system, designed to make your travel planning effortless. 
        Whether you're commuting for work, planning a weekend getaway, or embarking on an adventure, 
        EasyBus ensures a smooth and convenient experience. Book your tickets, manage your schedules all in one place. 
        <br><br><b>Let's get you on the road!</b></p>

    
    </div>

    <div class="login-container">
        
        <h2>Login</h2>
        <form id="loginForm" action="login.php" method="POST" onsubmit="return validateForm()">
            <div class="input-group">
                <label for="username"><strong>Username</strong></label>
                <input type="text" id="username" name="username" placeholder="Enter your username">
            </div>
            <div class="input-group">
                <label for="password"><strong>Password</strong></label>
                <input type="password" id="password" name="password" placeholder="Enter your password">
            </div>
            <button class="submit-btn" type="submit">Login</button>
            <div id="errorMessage" class="error-message"></div>
        </form>
        <button class="admin-btm"><a href="../Admin Login/index.php">Login as Admin</a></h6>
    </div>

</div>

    <script src="script.js"></script>
</body>
</html>

