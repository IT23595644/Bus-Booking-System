<?php 
    session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bus365</title>
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
                    background-color: rgb(255, 255, 255);
                    justify-content:center;
                    align-items: center;
                    text-align: center;
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

                .nav a{
                    
                    padding:18px 30px;
                    text-decoration: none;   
                    color:rgb(255, 255, 255);
                }
                .nav a:hover{
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
                .btnin:hover{
                    background-color: #3787ff;
                }

                /*footer Css*/    
                footer{
                    font-family: 'poppins';
                    color:rgb(255, 255, 255);
                    position: fixed;
                    bottom:0px;
                    left:50%;
                    transform: translateX(-50%);
                    text-align: center;
                    background-color: hsl(0, 2%, 16%);
                    width: 100%;
                }           
        </style>
    </head>

    <body>
        <div class="mainContainer"
        <header>
                <div class="contain">
                    <img src="logo.png" width="8%">
                    <div>
                        <h1>Bus365</h1>
                        <h6>Ride Easy, Ride with Bus365</h6>
                    </div>    
                </div>

                <div class="nav">
                    <div class="left">
                        <ul>
                            <li><a href="homepage/home.html">Home</a></li>
                            <li><a href="Seat Booking page/seat_booking.php">Booking</a></li>
                            <li><a href="#gasa">About</a></li>
                            <li><a href="#gasa">Scheduling</a></li>
                            <li><a href="ContactUs.php">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="right">
                        <button class="btnin">Sign In</button>
                        <button class="btnin">Sign Up</button>
                        <button class="btnin">Log Out</button>
                    </div>   
                </div>  
        </header>







    
