<?php
include 'connect.php';
?>

<html>
    <title>Payment</title>
    <link rel="stylesheet" href="style.css">
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
        margin-left: -2px;
        margin-top: 10px;
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
      }
      #year{
        margin-left: 20px;
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
                <form class="form-box" enctype="text/plain" method="post" target="_blank">
                </div>
                  <div>
                    <label for="full-name">Full Name</label>
                    <input id="full-name" name="full-name" placeholder="Cardholder Name" type="text"/>
                  </div>
                    <br>
                  <div>
                    <label for="credit-card-num">Card Number</label>
                    <input id="credit-card-num" name="credit-card-num" placeholder="1111-2222-3333-4444" type="text"/>
                  </div>
                  <br>
                  <div>
                    <p class="expires">Expires on:</p><br>
                    <div class="card-experation">
                      <label for="expiration-month">Month</label>
                      <select id="expiration-month" name="expiration-month" >
                        <option value="">Month:</option>
                        <option value="">January</option>
                        <option value="">February</option>
                        <option value="">March</option>
                        <option value="">April</option>
                        <option value="">May</option>
                        <option value="">June</option>
                        <option value="">July</option>
                        <option value="">August</option>
                        <option value="">September</option>
                        <option value="">October</option>
                        <option value="">November</option>
                        <option value="">Decemeber</option>
                      </select>
      
                      <label id="year">Year</label>
                      <select id="experation-year" name="experation-year">
                        <option value="">Year</option>
                        <option value="">2023</option>
                        <option value="">2024</option>
                        <option value="">2025</option>
                        <option value="">2026</option>
                      </select>
                      <br><br><br><br>
                    </div>
                  </div>
      
                  <div>
                    <label for="cvv">CVV</label>
                    <input id="cvv" name="cvv" placeholder="CVV" type="text"/>
                    
                  </div><br><br><br><br>
                  <button class="saveCard"><a href="cards.php" class="saveLink">Save Card</a></button>

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
