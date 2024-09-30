<?php
include 'connect.php';

$ID = $_GET['cardid'];
$sql = "SELECT * FROM card_details WHERE Card_ID='$ID'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
$fullName = $row['Full_Name'];
$cardNumber = $row['Card_Number'];
$expMonth = $row['Month'];
$expYear = $row['Year'];
$cvv = $row['CVV'];
?>

<html>
    <title>Payment</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_save.css">
    <style>
      .saveLink{
        text-decoration: none;
        color: black;
      }
      .saveCard{
        background-color: #0b7dbd;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 10px;
        margin-left: 200px;
        padding: 10px;
        margin-top: -75px;  
      }
      .saveCard:hover{
        background-color: #34aff4;
      }
      .input-field {
            margin-bottom: 10px;
            padding: 5px;
        }
        #exp-m{
            width: 50px;
            margin-left: -1px;
            background-color: rgba(173, 181, 255, 0.2);
            padding: 5px;
        }
        #exp-y{
            width: 70px;
            margin-left: 100px;
            margin-top: -5px;
            background-color: rgba(173, 181, 255, 0.2);
            padding: 5px;
        }
        .saveC{
            width: 100px;
            margin-top: 10px;
            padding: 10px;
            border-radius: 10px;
            margin-left: 355px;
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
        #exp-year{
            margin-left: 100px;
            margin-top: -78px;
            padding: 7px;
        }
      
    </style>
  <body>
    <div class="checkout-container">
      <div class="left-side">
        <div class="text-box">
          <h1 class="home-heading">Bus365</h1>
          <p class="home-price">____________________</p>
          <hr class="left-hr" />
    
        </div>
      </div>

      <div class="right-side">
        <div class="receipt">
            
            <div class="payment-info">
                <h3 class="payment-heading">Payment Information</h3>
                <form class="form-box" method="post" action="cards.php?cardid=<?php echo $ID; ?>">
                </div>
                  <div>
                    <label for="full-name">Full Name</label>
                    <input id="cardholder-name" name="full-name"  class="input-field" placeholder="Cardholder Name" type="text" value="<?php echo $fullName;?>">
                  </div>
                    
                  <div>
                    <label for="credit-card-num">Card Number</label>
                    <input id="card-number" name="credit-card-num"  class="input-field" placeholder="0000-0000-0000-0000" type="text"  value="<?php echo $cardNumber;?>">
                  </div>
                    <label id="exp-month" style="color: black; "> Month</label>
                    <input type="number" id="exp-m" name="Month" value="<?php echo $expMonth;?>">
                    <label id="exp-year" style="color: black; "> Year</label>
                    <input type="number" id="exp-y" name="Year" value="<?php echo $expYear;?>"><br><br>

                  <div>
                    <label for="cvv">CVV</label>
                    <input id="cvv" name="cvv" placeholder="CVV" type="text"  value="<?php echo $cvv;?>">
                    
                  </div><br><br>
                  <!-- <button class="saveCard"><a href="cards.php" class="saveLink">Save Card</a></button> -->
                  <button class="saveCard" type="submit">Save Card</button>


<script src="savecard.js"></script>
                  <br>
                    <center>
                   <button class="btn">
                    <i class="fa-solid fa-lock"></i> Book Securely
                  </button></center>
                </form>
      
                <p class="footer-text"><br><br><br><br><br>
                  <i class="fa-solid fa-lock"></i>
                  Your credit card infomration is encrypted
                </p>
              </div>

          </div>
        </div>

        
      </div>
  </body>
</html>
