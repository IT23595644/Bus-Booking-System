<?php
include '../config.php'; 

$ID = $_GET['updateid'];
$sql = "SELECT * FROM  paymentdetails WHERE payCardId='$ID'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
$fullName = $row['fullName'];
$cardNumber = $row['cardNum'];
$expMonth = $row['month'];
$expYear = $row['year'];
$cvv = $row['cvv'];


if (isset($_POST['submit'])) {
    $fullName = $_POST['Full_Name'];
    $cardNumber = $_POST['Card_Number'];
    $expMonth = $_POST['Month'];
    $expYear = $_POST['Year'];
    $cvv = $_POST['CVV'];

    $sql = "UPDATE paymentdetails SET fullName='$fullName', cardNum='$cardNumber', month='$expMonth', year='$expYear', cvv='$cvv' WHERE payCardId='$ID'";


$result = mysqli_query($conn, $sql);

if($result){
    //echo "Card updated successfully";
    header('location:paymentDetails.php');
}
}
?>


<html>
<head>
    <title>Save Card</title>
    <link rel="stylesheet" href="style_save.css">
    <?php 
    session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bus365</title>
        <link rel="icon" href="../Headers-Footers/logo.png" type="image/jpg">
        <script src="myScript.js"></script>
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
                                echo'<button class="btnin"><a style="color:Black;" href="../Inc/logout.inc.php">Log Out</a></button>';
                                echo'<button class="btnin"><a style="color:Black;" href="../userdashboard.php">Profile</a></button>';
                            }
                            else{
                                echo'<button class="btnin"><a style="color:Black;" href="Login page/index.php">Sign In</a></button>
                                    <button class="btnin"><a style="color:Black;" href="SignUp/index.php">Sign Up</a></button>';
                            }

                        ?>
                    </div>   
                </div>  
        </header>
    <style>
        body {
        background: url('back.jpg'); 
        
        
         }
         form {
            display: flex;
            flex-direction: column;
            width: 50%;
            margin: 0 auto;
        }

        .input-field {
            margin-bottom: 10px;
            padding: 5px;
        }

        button {
            padding: 10px;
            background-color: #999b98;
            color: white;
            border: none;
            cursor: pointer;
        }
        .box{
            
            width: 50%;
            margin: 0 auto;
            margin-top: 25px;
            padding: 20px;
            border: none ;
            background-color: #f9f9f9;
            border-radius: 20px;
            background-color: #dfdfdf;
        } 
        #exp-m{
            width: 50px;
            margin-right: 10px;
            background-color: rgba(173, 181, 255, 0.2);
        }
        #exp-y{
            width: 70px;
            margin-right: 10px;
            background-color: rgba(173, 181, 255, 0.2);
        }
        .saveC{
            width: 100px;
            margin-top: 10px;
            padding: 10px;
            border-radius: 10px;
            margin-left: 250px;
        }
        #cardholder-name{    
        margin-left: -2px;
        margin-top: 10px;
        padding: 7px;
        background-color: rgba(173, 181, 255, 0.2);
        }
        #card-number{
        margin-left: -2px;
        margin-top: 10px;
        padding: 7px;
        background-color:rgba(173, 181, 255, 0.2);
        }
        #cvv{
            width: 50px;  
            padding: 7px;
            background-color: rgba(173, 181, 255, 0.2);
        }
        .back{
            margin-top: 0px;
            margin-left: -5px;
            width:20px
        }
    </style> 
</head>
<body>

    <form method="POST" action="update_user.php?updateid=<?php echo $ID; ?>">
    <div class="box">
    <div class="back"><a href="paymentDetails.php"><img src="back.png" class="back" alt="back"></a></div><br>
        <label for="full-name" style="color: black; font-size:large">Full Name</label><br>
        <input id="cardholder-name" name="Full_Name" class="input-field" type="text" value=<?php echo $fullName;?>><br>
        <label for="credit-card-num" style="color: black; font-size:large">Card Number</label><br>
        <input id="card-number" name="Card_Number" class="input-field" type="number" value=<?php echo $cardNumber;?>><br><br>
        <label for="exp-month" style="color: black; font-size:large"> Month</label>
        <input type="number" id="exp-m" name="Month" value=<?php echo $expMonth;?>>
        <label for="exp-year" style="color: black; font-size:large"> Year</label>
        <input type="number" id="exp-y" name="Year" value=<?php echo $expYear;?>><br><br><br>
        <label for="cvv" style="color: black; font-size:large">CVV</label>
        <input id="cvv" name="CVV" type="text" value=<?php echo $cvv;?>><br>
        <button type="submit" name="submit" class="saveC">Update Card</button>
        </div>
    </form>

</body>
    <?php include '../Headers-Footers/footer.php'; ?> 
</html>