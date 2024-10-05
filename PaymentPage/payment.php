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
        <!--<script src="myScript.js"></script>-->
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
                                echo'<button class="btnin"><a style="color:Black;" href="userdashboard.php">Profile</a></button>';
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
    margin-bottom: -11px;
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
    <script>
      /*function validateForm(){
        var name = document.getElementById("cardholder-name").value;
        var card = document.getElementById("card-number").value;
        var month = document.getElementById("exp-m").value;
        var year = document.getElementById("exp-y").value;
        var cvv = document.getElementById("cvv").value;
        var valid = true;
        if(name == ""){
          alert("Name is required");
          valid = false;
        }
        if(card == ""){
          alert("Card Number is required");
          valid = false;
        }
        if(month == ""){
          alert("Month is required");
          valid = false;
        }
        if(year == ""){
          alert("Year is required");
          valid = false;
        }
        if(cvv == ""){
          alert("CVV is required");
          valid = false;
        }
        return valid;
      }
      function validateName(){
        var name = document.getElementById("cardholder-name").value;
        if(name == ""){
          document.getElementById("cardholder-name").style.border = "1px solid red";
        }
        else{
          document.getElementById("cardholder-name").style.border = "1px solid green";
        }
      }
      function validateCard(){
        var card = document.getElementById("card-number").value;
        if(card == ""){
          document.getElementById("card-number").style.border = "1px solid red";
        }
        else{
          document.getElementById("card-number").style.border = "1px solid green";
        }
      }
      function validateMonth(){
        var month = document.getElementById("exp-m").value;
        if(month == ""){
          document.getElementById("exp-m").style.border = "1px solid red";
        }
        else{
          document.getElementById("exp-m").style.border = "1px solid green";
        }
      }
      function validateYear(){
        var year = document.getElementById("exp-y").value;
        if(year == ""){
          document.getElementById("exp-y").style.border = "1px solid red";
        }
        else{
          document.getElementById("exp-y").style.border = "1px solid green";
        }
      }
      function validateCVV(){
        var cvv = document.getElementById("cvv").value;
        if(cvv == ""){
          document.getElementById("cvv").style.border = "1px solid red";
        }
        else{
          document.getElementById("cvv").style.border = "1px solid green";
        }
      }*
    </script>
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
                <form class="form-box" method="post" action="cards.php?cardid=<?php echo $ID; ?>" onsubmit="return validateForm()">
                </div>
                  <div class="name1">
                    <label id="full-name">Full Name</label>
                    <input id="cardholder-name" name="full-name"  class="input-field" placeholder="Cardholder Name" type="text" oninput="validateName()" value="<?php echo $fullName;?>">
                  </div>
                    
                  <div class="card1">
                    <label id="credit-card-num">Card Number</label>
                    <input id="card-number" name="credit-card-num"  class="input-field" placeholder="0000-0000-0000-0000" type="number" oninput="validateCard()" value="<?php echo $cardNumber;?>">
                  </div>
                    <label id="exp-month" style="color: black; "> Month</label>
                    <input type="number" id="exp-m" class="exp" name="Month" oninput="validateMonth()" value="<?php echo $expMonth;?>">
                    <label id="exp-year" style="color: black; "> Year</label>
                    <input type="number" id="exp-y" class="exp" name="Year" oninput="validateYear()" value="<?php echo $expYear;?>"><br><br>

                  <div class="cvv1">
                    <label for="cvv">CVV</label>
                    <input id="cvv" name="cvv" placeholder="CVV" type="text" oninput="validateCVV()" value="<?php echo $cvv;?>">
                  </div><br><br>
                  <button class="saveCard" type="submit" style="font-size: 15px;" ><a href="cards.php" style="text-decoration:none; color:black;" onclick="validateForm()">Use Card</a></button>
                  <br>
                    
                   <button class="btn" style="font-size: 20px;" type="submit">
                    <a href="cards.php" style="text-decoration:none; color:white;" onclick="validateForm()" >Pay Now</a>
                  </button></center>
                </form>
      
                
                  
                  
                </p>
              </div>

          </div>
        </div>

        
      </div>
    </div>
<?php include '../Headers-Footers/footer.php'; ?> 

