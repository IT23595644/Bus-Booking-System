<?php
include '../config.php';

 session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bus365</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="../Headers-Footers/logo.png" type="image/jpg">
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
        <div class="mainContainer">
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
                            <li><a class="navigation" href="index.php">Home</a></li>
                            <li><a class="navigation" href="seat_booking.php">Booking</a></li>
                            <li><a class="navigation" href="#gasa">About</a></li>
                            <li><a class="navigation" href="#gasa">Scheduling</a></li>
                            <li><a class="navigation" href="ContactUs.php">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="right">
                        <?php
                            if(isset($_SESSION["aid"]))
                            {
                                echo'<button class="btnin"><a style="color:Black;" href="Inc/logout.inc.php">Log Out</a></button>';
                            }
                            else{
                                echo'<button class="btnin"><a style="color:Black;" href="Login page/index.php">Sign In</a></button>
                                    <button class="btnin"><a style="color:Black;" href="SignUp/index.php">Sign Up</a></button>';
                            }

                        ?>
                    </div>   
                </div>  
        </header>

<div class="content">

<center><h1>Bus Management System</h1></center>

<button class="add-button"><a href="add_bus.php">Add New Bus</a></button>

<center>

<table>
        <tr>
            <th>ID</th>
            <th>Number</th>
            <th>Owner</th>
            <th>Route</th>
            <th>Price(LKR)</th>
            <th>Capacity</th>
            <th>Status</th>
            <th class="actions">Actions</th>
        </tr>
        <?php 
        
        $stmt = $conn->query("SELECT * FROM bus");

        while ($bus = $stmt->fetch_assoc()): ?>
        <tr>
            <td><?php echo htmlspecialchars($bus['busID']); ?></td>
            <td><?php echo htmlspecialchars($bus['busNum']); ?></td>
            <td><?php echo htmlspecialchars($bus['busOwner']); ?></td>
            <td><?php echo htmlspecialchars($bus['route']); ?></td>
            <td><?php echo htmlspecialchars($bus['price']); ?></td>
            <td><?php echo htmlspecialchars($bus['seatCount']); ?></td>
            <td><?php echo htmlspecialchars($bus['status']); ?></td>
            <td class="actions">
                <a class="edit-button" href="update_bus.php?id=<?php echo htmlspecialchars($bus['busID']); ?>">Edit</a>
                <a class="delete-button" href="delete_bus.php?id=<?php echo htmlspecialchars($bus['busID']); ?>" onclick="return confirm('Are you sure?');">Delete</a>
            </td>
        </tr>
        
        <?php endwhile; ?>
</table>
</center>
</div>

<div class="footer">      
    <footer>   
            Copyright &copy; 2024<b> Bus365</b>. All rights reserved<br>
            <small>email@Bus365.com</small>   
    </footer>
</div>
</body>
</html>

