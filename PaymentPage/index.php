<?php
include 'connect.php';

if(isset($_GET['cardid'])){
  $ID = $_GET['cardid'];
$sql = "SELECT * FROM card_details WHERE Card_ID='$ID'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
$fullName = $row['Full_Name'];
$cardNumber = $row['Card_Number'];
$expMonth = $row['Month'];
$expYear = $row['Year'];
$cvv = $row['CVV'];

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


<?php include '../Headers-Footers/header.php'; ?>
<script src="js/myScript.js"></script>
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
  input{
    border-radius: 10px;
    padding: 7px;
    margin-left: 10px;
    width: 90%;    
  }
  input hover{
    border: 1px solid black;
  }
  #full-name{
    margin-left: -2px;;
  }
  #credit-card-num{
    margin-left: -2px;
    margin-top: 10px;
  }
  #cvv{
    width: 50px;  
  }
  #expiration-month{
    padding: 7px;
    border-radius: 10px;
    width:75px;
  }
  #experation-year{
    padding: 7px;
    border-radius: 10px;
    width:750px;
  }
  #year{
    margin-left: 20px;
  }
  
 .body12 {
    font-size: 62.5%;
  }
  
  .body12 {
    background: url('back.jpg');
    background-position: center;
    background-size: cover;
    backdrop-filter: blur(8px);
    color: #3c3c39;
  
    display: flex;
    justify-content: center;
    height: 100vh;
    font-family: 'Monsterrat', sans-serif;
    position: relative;
    padding: 2rem 0;
  }
  
  .checkout-container {
    max-width: 120rem;
    height: 50rem;
    display: grid;
    grid-template-columns: 1fr 1fr;
    justify-content: center;
   margin-bottom: 10rem; 
   border-radius: 8px;
  }
  
  em {
    font-style: normal;
    font-weight: 700;
  }
  
  hr {
    color: #fff;
    margin-bottom: 1.2rem;
  }
  
  .left-side {
    background: url('bus00.png');
    background-position: center;
    background-position: 0px 1000px ;
    background-size: cover;
    position: relative;
    margin-bottom: 150px;
    margin-top: 87px;
  }
  
  .text-box {
    background: rgba(95, 121, 134, 0.8);
    width: 100%;
    padding: 1rem 2rem;
    position: absolute;
    bottom: 0;
    margin-bottom: 0px;
  }
  
  /* Left container text */
  
  .home-heading {
    color: #e8e8e1;
    font-size: 3.2rem;
    font-weight: 700;
    line-height: 1;
    margin-bottom: 1rem;
  }
  
  .home-price {
    color: #aeae97;
    font-size: 2rem;
    margin-bottom: 1.2rem;
  }
  
  .home-desc {
    color: #e8e8e1;
    font-size: 1.2rem;
    line-height: 1.5;
    letter-spacing: 0.5px;
  }
  
  /* Right Side of container */
  
  .right-side {
    background-color: #fff;
    padding: 1.8rem 3.2rem;
    margin-top: 87px;
    margin-bottom: 0px;
  }
  
  .receipt {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    border-bottom: solid 1px;
    margin-bottom: 0px;
    margin-top: 10px;
  }
  
  .receipt-heading {
    font-size: 1.6rem;
    text-align: left;
  }
  
  .table {
    border-collapse: separate;
    border-spacing: 0 1.5rem;
    color: #64645f;
    font-size: 1.2rem;
    margin-bottom: 0.5rem;
    width: 100%;
  }
  
  .total td {
    font-size: 1.4rem;
    font-weight: 700;
  }
  
  .price {
    text-align: end;
  }
  
  
  
  .payment-heading {
    font-size: 30px;
    margin-bottom: -20px;
    margin-top: -10px; ;
    font-family: 'Times New Roman', Times, serif
  }
  

  
  .card-logo {
    font-size: 15px;
  }
  
  .form-box {
    margin-bottom: 1rem;
  }
  .expires,
  .form-box label {
    font-size: 15px;
    font-weight: 550;
  }

label {
    font-size: 15px;
    font-weight: 550;
    margin-right: 10px;
  }
  
  .form-box input {
    font-family: 'Monsterrat', sans-serif;
    padding: 0.5rem;
    width: 100%;
    border-radius: 8px;
  }
  
  .form-box select {
    padding: 5px;
    border-radius: 8px;
  }
  
  .form-box #cvv {
    width: 25%;
  }

  .btn {
    background-color: #4c616b;
    border: none;
    border-radius: 8px;
    color: #eff2f3;
    font-size: 1.6rem;
    font-weight: 700;
    letter-spacing: 0.5px;
    padding: 10px;
    cursor: pointer;
  
  }
  
  .footer-text {
    font-size: 1rem;
    text-align: center;
    margin-top: -91px;
  }
  
  .form-box *:focus {
    border-radius: 8px;
  }


.checkbox {
    margin-bottom: 15px;
}
#paymentBtn {
    background-color: #8a8a8a;
    color: white;
    padding: 5px;
    border: none;
    width: 30%;
    border-radius: 5px;
    cursor: pointer;
    font-size: 12px;
   margin-left: 199px;
   margin-bottom: -5px;
   margin-top: -30px;
}


button {
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}



.nextButton{
   text-decoration: none;
}
.saveCard{
  text-decoration: none;
}


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
        margin-top: -66px;  
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
            margin-bottom: -100px;
        }
        #exp-year{
            margin-left: 100px;
            margin-top: -98px;
            padding: 7px;
        }
        #exp-month{
            margin-top: -10px;
        }
        .card1{
            margin-top: -10px;
        }
        .cvv1{
            margin-top: -36px;
        }
        .name1{
            margin-top: 10px;
        }
      
    </style>
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
                    <input id="cardholder-name" name="full-name"  class="input-field" placeholder="Cardholder Name" type="text" oninput="validateName()" value="<?php echo $fullName;?>">
                  </div>
                    
                  <div class="card1">
                    <label id="credit-card-num">Card Number</label>
                    <input id="card-number" name="credit-card-num"  class="input-field" placeholder="0000-0000-0000-0000" type="text" oninput="validateCard()" value="<?php echo $cardNumber;?>">
                  </div>
                    <label id="exp-month" style="color: black; "> Month</label>
                    <input type="number" id="exp-m" class="exp" name="Month" oninput="validateMonth()" value="<?php echo $expMonth;?>">
                    <label id="exp-year" style="color: black; "> Year</label>
                    <input type="number" id="exp-y" class="exp" name="Year" oninput="validateYear()" value="<?php echo $expYear;?>"><br><br>

                  <div class="cvv1">
                    <label for="cvv">CVV</label>
                    <input id="cvv" name="cvv" placeholder="CVV" type="text" oninput="validateCVV()" value="<?php echo $cvv;?>">
                  </div><br><br>
                  <button class="saveCard" type="submit" style="font-size: 15px;" ><a href="cards.php" style="text-decoration:none; color:black;" onclick="validateForm()">Save Card</a></button>
                  <br>
                    <center>
                   <button class="btn" type="submit"  style="font-size: 20px;">
                    <i class="fa-solid fa-lock"></i> Pay Now
                  </button></center>
                </form>
      
                <p class="footer-text" style="font-size: 10px;"><br><br><br><br><br>
                  
                  
                </p>
              </div>

          </div>
        </div>

        
      </div>
  <?php include '../Headers-Footers/footer.php'; ?> 

