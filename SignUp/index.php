<?php

    include('connection.php');

    include('../Headers-Footers/header.php');

?>

    <style>

body {
    font-family: Arial, sans-serif;
    background-color: #00000019;
    background-image: url('back.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  
}



h2 {
    text-align: center;
    color: #333;
}


form {
    background: rgba(255, 255, 255, 0.366);
    padding: 70px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.152);
    max-width: 600px;
    margin: auto;
    padding-top: 30px;
    padding-bottom: 10px;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: -10px;
}
#first_name, #last_name, #username, #email, #password, #confirm_password {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    background-color: #0073ff;
    color: white;
    padding: 10px;
    margin-left: 100px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 50%;
    font-size: 16px;
}

.subbtn:hover {
    background-color: #5cb85c;
    
}

.error {
    color: red;
    margin-top: 10px;
}


    </style>

    <br>
    <div class="title"><h2>Register Form</h2></div>
    <br>
 
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

    <br><br><br>

<?php

    include('../Headers-Footers/footer.php');

?>
