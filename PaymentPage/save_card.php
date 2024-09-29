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
    <link rel="stylesheet" href="style.css">
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
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style> 
</head>
<body>
    <form method="POST" action="save_card.php">
        <label for="full-name">Full Name</label>
        <input id="cardholder-name" name="Full_Name" class="input-field" type="text" placeholder="Cardholder Name" required><br>
        <label for="credit-card-num">Card Number</label>
        <input id="card-number" name="Card_Number" class="input-field" type="text" placeholder="Card Number" required>
        <label for="exp-month">Expiration Month</label>
        <select id="exp-month" name="Month">
            <option value="">Month</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
        <label for="exp-year">Expiration Year</label>
        <select id="exp-year" name="Year">
            <option value="">Year</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
            <option value="2026">2026</option>
        </select>
        <label for="cvv">CVV</label>
        <input id="cvv" name="CVV" placeholder="CVV" type="text"/>
        <button type="submit" name="submit">Save Card</button>
    </form>
</body>
</html>

