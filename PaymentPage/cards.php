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

    mysqli_close($conn);
}
?>

<html>
<head>
    <title>Save Card</title>
    <style>
        table {
      width: 100%;
      border-collapse: collapse;
      margin: 20px 0;
      font-family: Arial, sans-serif;
      font-size: 16px;
    }

    table, th, td {
      border: 1px solid #ddd;
    }

    th, td {
      padding: 12px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
      color: #333;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tr:nth-child(odd) {
      background-color: #e6e6e6;
    }

    tr:hover {
      background-color: #d0d0d0;
    }

    td {
      color: #333;
    }

    .nextButton {
      background-color: #838383;
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      border-radius: 16px;
    }
    </style> 
</head>
<body>
<div>
  <div>
    <h2>Choose an Option</h2>
    <form method="POST" action="save_card.php">
      
      <a href="save_card.php">
            <a href="save_card.php" class="nextButton">Add New Card</a>
            <br><br>
      <table>
        <tr>
          <td>ID</td>
          <td>Full Name</td>
          <td>Card Number</td>
          <td>Expiration Month</td>
          <td>Expiration Year</td>
          <td>CVV</td>
          <td></td>
          <td></td>
        </tr>
        <?php
        $query = "SELECT * FROM card_details";
        $result = mysqli_query($conn, $query);
        if($result){
          while ($row = mysqli_fetch_assoc($result)) {
            $ID = $row['Card_ID'];
            $fullName = $row['Full_Name'];
            $cardNumber = $row['Card_Number'];
            $expMonth = $row['Month'];
            $expYear = $row['Year'];
            $cvv = $row['CVV'];
            echo '<tr>
            <td>'.$ID.'</td>
            <td>'.$fullName.'</td>
            <td>'.$cardNumber.'</td>
            <td>'.$expMonth.'</td>
            <td>'.$expYear.'</td>
            <td>'.$cvv.'</td>
            <td><button><a href="update.php?updateid='.$ID.'">UPDATE</a></button></td>
            <td><button><a href="delete.php?deleteid='.$ID.'">DELETE</a></button></td>
            </tr>';
        }
      }
        ?>   
      </table>
    </form>
  </div>
</div>
</body>
</html>