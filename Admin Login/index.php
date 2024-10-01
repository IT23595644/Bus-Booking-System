<?php

    include("../config.php");

    include("../Headers-Footers/header.php");

?>

<link rel="stylesheet" href="styles.css">
<nav>
<div class="combination">

    <div class="login-container">
        
        <h2>Admin Login</h2>
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
        <button class="user-btn"><a href="../Login page/index.php">Login as User</a></h6>
    </div>

</div>

</nav>
    <script src="script.js"></script>

<?php include("../Headers-Footers/footer.php");
