<?php

    include("config.php");
?>
<?php 
    session_start();

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
                                echo'<button class="btnin"><a style="color:Black;" href="../SignUp/index.php">Sign Up</a></button>';
                            }

                        ?>
                    </div>   
                </div>  
        </header>


<nav>
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
        <button class="admin-btn"><a href="../Admin Login/index.php">Login as Admin</a></h6>
    </div>

</div>

</nav>
    <script src="script.js"></script>

<?php include("../Headers-Footers/footer.php");
