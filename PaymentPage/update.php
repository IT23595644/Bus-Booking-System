<?php
include 'connect.php'; 

$ID = $_GET['updateid'];
$sql = "SELECT * FROM card_details WHERE Card_ID='$ID'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
$fullName = $row['Full_Name'];
$cardNumber = $row['Card_Number'];
$expMonth = $row['Month'];
$expYear = $row['Year'];
$cvv = $row['CVV'];


if (isset($_POST['update'])) {
    $fullName = $_POST['Full_Name'];
    $cardNumber = $_POST['Card_Number'];
    $expMonth = $_POST['Month'];
    $expYear = $_POST['Year'];
    $cvv = $_POST['CVV'];

$sql = "UPDATE card_details SET Card_ID=$ID Full_Name='$fullName', Card_Number='$cardNumber', Month='$expMonth', Year='$expYear', CVV='$cvv' WHERE Card_ID='$ID'";

$result = mysqli_query($conn, $sql);

if(!$result){
    echo "Card updated successfully";

    //header('location:cards.php');
}
}
?>
<html>
<head>
    <title>Save Card</title>
    <link rel="stylesheet" href="style_save.css">
</head>
<body>

    <form method="POST" action="update.php?updateid=<?php echo $ID; ?>">
                  <div>
                    <label for="full-name">Full Name</label>
                    <input id="full-name" name="full-name" placeholder="Cardholder Name" type="text" <?php echo $fullName;?>>
                  </div>
                    <br>
                  <div>
                    <label for="credit-card-num">Card Number</label>
                    <input id="credit-card-num" name="credit-card-num" placeholder="1111-2222-3333-4444" type="text" <?php echo $cardNumber;?>>
                  </div>
                  <br>
                  <div>
                    <p class="expires">Expires on:</p><br>
                    <div class="card-experation">
                      <label for="expiration-month">Month</label>
                      <input type="number" id="expiration-month" name="expiration-month" <?php echo $expMonth;?>>
      
                      <label id="year">Year</label>
                      <input type="number" id="experation-year" name="experation-year" <?php echo $expYear;?>>
                      <br><br><br><br>
                    </div>
                  </div>
      
                  <div>
                    <label for="cvv">CVV</label>
                    <input id="cvv" name="cvv" placeholder="CVV" type="text"/>

                    
                  </div><br><br><br><br>
                  <button class="saveCard"><a href="cards.php" class="saveLink">Save Card</a></button>
    </form>

</body>
</html>