<?php

    include('connection.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bus365</title>
        <link rel="icon" href="../Headers-Footers/logo.png" type="image/jpg">
        <link rel="stylesheet" href="styles.css">
        <style>
                @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

                /*header css*/
                *{  
                    font-family: 'poppins';
                    box-sizing: border-box;
                    margin:0px;
                    padding:0px;
                }

                .contain{
                    
                    display:flex;
                    background-color: #c4c4c4;
                    justify-content:center;
                    align-items: center;
                    text-align: center;
                }
                .iconlogo{
                    font-size: 4rem;
                }
                .nav{
                    display:flex;
                    justify-content: space-between;
                    background-color: rgba(32, 32, 32, 0.852);
                    padding:9px;
                    align-items: center;
                    
                }
                .left ul{
                    display:flex;
                    margin-left:-10px;
                    list-style-type: none;
                    
                }

                .nav .navigation{
                    
                    padding:18px 30px;
                    text-decoration: none;   
                    color:rgb(255, 255, 255);
                }
                .nav .navigation:hover{
                    background-color: rgb(5, 5, 5);
                    transition: 0.5s;
                }

                .btnin{
                    margin-right:-1px;
                    margin-left: 10px;
                    padding:10px 15px;
                    border: none;
                    border-radius: 8px;
                    font-weight: bold;
                }
                .btnin a{
                    text-decoration: none;
                }
                .btnin:hover{
                    background-color: #3787ff;
                }

                /*footer Css*/    
                footer{
                    font-family: 'poppins';
                    color:rgb(255, 255, 255);
                    position:fixed;
                    bottom:0px;
                    left:50%;
                    transform: translateX(-50%); 
                    text-align: center;
                    background-color: hsl(0, 2%, 16%);
                    width: 100%;
                    padding: 1px;
                }           
        </style>
    </head>

    <body>
        <div class="mainContainer"
        <header>
                <div class="contain">
                    <div class="iconlogo">🚌</div>
                    <div>
                        <h1>Bus365</h1>
                        <h6>Ride Easy, Ride with Bus365</h6>
                    </div>    
                </div>

                <div class="nav">
                    <div class="left">
                        <ul>
                            <li><a class="navigation" href="../index.php">Home</a></li>
                            <li><a class="navigation" href="../seat_booking.php">Booking</a></li>
                            <li><a class="navigation" href="../aboutus.php">About Us</a></li>
                            <li><a class="navigation" href="../schedule.php">Scheduling</a></li>
                            <li><a class="navigation" href="../ContactUs.php">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="right">
                        <?php
                            if(isset($_SESSION["username"]))
                            {
                                echo'<button class="btnin"><a style="color:Black;" href="Inc/logout.inc.php">Log Out</a></button>';
                                echo'<button class="btnin"><a style="color:Black;" href="Inc/logout.inc.php">Profile</a></button>';
                            }
                            else{
                                echo'<button class="btnin"><a style="color:Black;" href="../Login page/index.php">Sign In</a></button>';
                            }

                        ?>
                    </div>   
                </div>  
        </header>


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
