<?php
include '../config.php'; 
    
session_start();
if (isset($_POST['submit'])) {
    
    $fullName = $_POST['Full_Name'];
    $cardNumber = $_POST['Card_Number'];
    $expMonth = $_POST['Month'];
    $expYear = $_POST['Year'];
    $cvv = $_POST['CVV'];
    $uid= $_SESSION['userId'];

    // Insert card details into the database
    $query = "INSERT INTO `paymentdetails` (fullName, cardNum, month, year, cvv,userId ) 
              VALUES ('$fullName', '$cardNumber', '$expMonth', '$expYear', '$cvv','$uid')";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "Card not saved successfully";
    } 
    else {
        header('location:cards.php');
    }

    mysqli_close($conn);
}
?>


    
    <link rel="stylesheet" href="style_save.css">
    <style>
        .bg {
        background: url('bgimg.jpg');
        height: 110vh;
         }
         form {
            display: flex;
            flex-direction: column;
            width: 45%;
            margin: 0 auto;
        }

        .input-field {
            margin-bottom: 10px;
            padding: 5px;
            width: 90%;
        }

        button {
            padding: 10px;
            background-color: #999b98;
            color: white;
            border: none;
            cursor: pointer;
        }
        .box{
            
            width: 60%;
            margin: 0 auto;
            margin-top: 25px;
            padding: 20px;
            border: none ;
            background-color: #f9f9f9;
            border-radius: 20px;
            background-color: #dfdfdf;
        } 
        #exp-m{
            background-color: rgba(173, 181, 255, 0.2);
        }
        #exp-y{
            background-color: rgba(173, 181, 255, 0.2);
        } 
        .exp-year{
            margin-left: 20px;
        }
         .monthyear{
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            width: 80%;
        }
        .saveC{
            width: 100px;
            margin-top: 10px;
            padding: 10px;
            border-radius: 10px;
            margin-left: 270px;
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
            width: 100px;  
            padding: 7px;
            background-color: rgba(173, 181, 255, 0.2);
        }
        .cv{
            margin-top: 35px;       
        }
        .back{
            margin-top: 0px;
            margin-left: -5px;
            width:20px
        }
        .namecard{
            margin-top: 20px;
        }
    </style> 

<div class="bg">
<?php 
   

    

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bus365</title>
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
                 
                /* java Script */
                #name-error{
                    color: red;
                    font-size: 12px;
                    font-weight: 600;
                }
                #card-error{
                    color: red;
                    font-size: 12px;
                    font-weight: 600;
                }
                #month-error{
                    color: red;
                    font-size: 12px;
                    font-weight: 600;
                    margin-left: 70px;
                }
                #year-error{
                    color: red;
                    font-size: 12px;  
                    font-weight: 600;
                    margin-left: 100px;
                }
                #cvv-error{
                    color: red;
                    font-size: 12px;
                    font-weight: 600;
                    margin-top: 20px;
                }
                .error1{
                    display: flex;
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
                            <li><a class="navigation" href="../about US.php">About Us</a></li>
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
<div class="body12">
    
    <form method="POST" action="save_card.php">
    <div class="box">
        <div class="back"><a href="cards.php"><img src="back.png" class="back" alt="back"></a></div><br>

        
        <label for="full-name" style="color: black; font-size:large">Full Name</label><br>
        <input id="cardholder-name" name="Full_Name" class="input-field" type="text"  onkeyup="validateName()" >
        <div id="name-error" class="error"></div>

        <div class="namecard">
        <label for="credit-card-num" style="color: black; font-size:large">Card Number</label><br>
        <input id="card-number" name="Card_Number" class="input-field" type="text" onkeyup="validateCard()">
        <div id="card-error" class="error"></div>
        </div>

        <div class="monthyear">
        <label for="exp-month" style="color: black; font-size:large"> Month</label>
        <input type="text" id="exp-m" name="Month" onkeyup="validateMonth()">
        

        <label class="exp-year" style="color: black; font-size:large"> Year</label>
        <input type="text" id="exp-y" name="Year" onkeyup="validateYear()">
       
        </div>  
                  <div class="error1">
                  <div id="month-error" ></div>
                  
                  <div id="year-error" ></div>
        </div>

        <div class="cv">                    
        <label for="cvv" style="color: black; font-size:large">CVV</label>
        <input id="cvv" name="CVV" type="text" onkeyup="validateCVV()" >
        <div id="cvv-error" class="error"></div>
        </div>  

        <button type="submit" name="submit" class="saveC">Save Card</button>
        </div>
    </form>
    <script src="myScript.js"></script>
</div>
<?php include '../Headers-Footers/footer.php'; ?> 
</div>
</html>

