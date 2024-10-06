<?php
include '../config.php';
session_start();

if(isset($_GET['cardid'])){
  $ID = $_GET['cardid'];
$sql = "SELECT * FROM  paymentdetails WHERE payCardId='$ID'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
$fullName = $row['fullName'];
$cardNumber = $row['cardNum'];
$expMonth = $row['month'];
$expYear = $row['year'];
$cvv = $row['cvv'];

mysqli_close($conn);
}
else{
$fullName = "";
$cardNumber = "";
$expMonth = "";
$expYear = "";
$cvv = "";
}


?>



<!DOCTYPE html>
<html>
    <head>
        <title>Bus365</title>
        <link rel="icon" href="../Headers-Footers/logo.png" type="image/jpg">
        
        <link rel="stylesheet" href="payment style.css">
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







    

<div class="body1234">


  
  </head>
    <div class="body12">
     
    <div class="checkout-container">
      <div class="left-side">
        <div class="text-box">
          <h1 class="home-heading" style="font-size: 25px;">Bus365</h1>
          <p class="home-price"  style="font-size: 15px;">Ride Easy, Ride with Bus365</p>
          <hr class="left-hr" />
    
        </div>
      </div>
      <div class="wBox">
      <div class="right-side">
        <div class="receipt">
            
            <div class="payment-info">
            
                <h3 class="payment-heading">Payment Information</h3>
                <form class="form-box" method="post" action="cards.php?cardid=<?php echo $ID; ?>">
                </div>
                  <div class="name1">
                    <label id="full-name">Full Name</label>
                    <input id="cardholder-name" name="full-name"  class="input-field" placeholder="Cardholder Name" type="text" onkeyup="validateName()" value="<?php echo $fullName;?>">
                    <div id="name-error" class="error"></div>
                  </div>
                    
                  <div class="card1">
                    <label id="credit-card-num">Card Number</label>
                    <input id="card-number" name="credit-card-num"  class="input-field" placeholder="Card Number" type="text" onkeyup="validateCard()" value="<?php echo $cardNumber;?>">
                    <div id="card-error" class="error"></div>
                  </div>
                  <div class="monthyear">
                    <label id="exp-month" style="color: black; "> Month</label>
                    <input type="text" id="exp-m" class="exp" name="Month" onkeyup="validateMonth()" value="<?php echo $expMonth;?>">
                    

                    <label id="exp-year" style="color: black; "> Year</label>
                    <input type="text" id="exp-y" class="exp" name="Year" onkeyup="validateYear()" value="<?php echo $expYear;?>"><br><br>
                    
                  </div>  
                  <div class="error1">
                  <div id="month-error" ></div>
                  
                  <div id="year-error" ></div>
                  </div>

                  <div class="cvv1">
                    <label for="cvv">CVV</label>
                    <input id="cvv" name="cvv" placeholder="CVV" type="text" onkeyup="validateCVV()" value="<?php echo $cvv;?>">
                    <div id="cvv-error" class="error"></div>

                  </div><br><br>
                  <button class="saveCard" type="submit" style="font-size: 15px;" ><a href="cards.php" style="text-decoration:none; color:black;" onclick="validateForm()">Use Card</a></button>
                  <br>
                    
                   <button class="btn" style="font-size: 20px;" type="submit">
                    <a href="../index.php" style="text-decoration: none; color:white;" onclick="payNow()">Pay Now</a>

                  </button></center>
                </form>
             
                </p>
              </div>

          </div>
        </div>

        
      </div>
      
    </div>
    <script src="myScript.js"></script>
<?php include '../Headers-Footers/footer.php'; ?> 

