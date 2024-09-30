<?php

    include('connection.php');

    include('../Headers-Footers/header.php');

?>

    <link rel="stylesheet" href="styles.css">

    <br>
    <div class="title"><h2>Register Form</h2></div>
    <br>
    <div id="regform">
    <form action="signup.php" method="POST">
        <label>First Name:</label><br>
        <input type="text" id="first_name" name="first_name" required ><br><br>
        
        <label>Last Name:</label><br>
        <input type="text" id="last_name" name="last_name" required><br><br>
        
        <label>Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        
        <label>Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label>Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        
        <label>Confirm Password:</label><br>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>
        
        <input type="submit" value="Signup" class="subbtn">
    </form>
    </div>
    <br><br><br>

<?php

    include('../Headers-Footers/footer.php');

?>
