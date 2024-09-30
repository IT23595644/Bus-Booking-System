<?php
include 'connect.php'; 

if (isset($_POST['submit'])) {
    $fullName = $_POST['Full_Name'];
    $cardNumber = $_POST['Card_Number'];
    $expMonth = $_POST['Month'];
    $expYear = $_POST['Year'];
    $cvv = $_POST['CVV'];

    // Insert card details into the database
    $query = "INSERT INTO `card_details` (Full_Name, Card_Number, Month, Year, CVV) 
              VALUES ('$fullName', '$cardNumber', '$expMonth', '$expYear', '$cvv')";

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

<html>
<head>
    <title>Save Card</title>
    <link rel="stylesheet" href="style_save.css">
    <style>
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
            width: 100%;
            margin: 0 auto;
            margin-top: 100px;
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
        .back{
            margin-top: 0px;
            margin-left: -5px;
            width:20px
        }
    </style> 
</head>
<body>
    
    <form method="POST" action="save_card.php">
    <div class="box">
        <div class="back"><a href="cards.php"><img src="back.png" class="back" alt="back"></a></div><br>
        <label for="full-name" style="color: black; font-size:large">Full Name</label><br>
        <input id="cardholder-name" name="Full_Name" class="input-field" type="text" required><br>
        <label for="credit-card-num" style="color: black; font-size:large">Card Number</label><br>
        <input id="card-number" name="Card_Number" class="input-field" type="number" required><br><br>
        <label for="exp-month" style="color: black; font-size:large"> Month</label>
        <input type="number" id="exp-m" name="Month">
        <label for="exp-year" style="color: black; font-size:large"> Year</label>
        <input type="number" id="exp-y" name="Year"><br><br><br>
        <label for="cvv" style="color: black; font-size:large">CVV</label>
        <input id="cvv" name="CVV" type="text"/><br>
        <button type="submit" name="submit" class="saveC">Save Card</button>
        </div>
    </form>
    
</body>
</html>

