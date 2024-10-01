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
    .body12 {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-image: url(back.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}

.card-box {
    background-color: #c0c0c0;
    width: 100%;
    max-width: 1000px;
    margin-top: -200px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    margin: 20px 0;
    text-align: center;
    border: 1px solid #ddd;
    border-radius: 10px;
    overflow: hidden;
}

th, td {
    padding: 10px;
    border: 1px solid #ddd;
}

th {
    background-color: #f4f4f4;
}

table tr:first-child th:first-child {
    border-top-left-radius: 10px;
}

table tr:first-child th:last-child {
    border-top-right-radius: 10px;
}

table tr:last-child td:first-child {
    border-bottom-left-radius: 10px;
}

table tr:last-child td:last-child {
    border-bottom-right-radius: 10px;
}

.exp-month {
    width: 50px;
}

.update-btn {
    background-color:#585858;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.delete-btn {
    background-color: #585858;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.update-btn a, .delete-btn a {
    color: white;
    text-decoration: none;
}

.update-btn:hover, .delete-btn:hover {
    opacity: 0.8;
}

.add-new-card-btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    text-align: center;
}

.add-new-card-btn:hover {
    background-color: #0056b3;
}

.payment-details {
    display: flex;
    justify-content: center;
}

.button-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}
.row-click:hover {
      background-color: #d0d0d0;
      cursor: pointer;
    }
  .card-click{
        text-decoration: none;
        color: black;
  }  
    </style> 
</head>
<?php include '../Headers-Footers/header.php'; ?>
<div class="body12">
<div class="card-box">
    <h2><a href="index.php" style="text-decoration: none; color:black;">Choose an Option</a></h2>
    <form method="POST" action="">
    <div class="payment-details box">
      <table>
        <tr>
          <td>Full Name</td>
          <td>Card Number</td>
          <td> Month</td>
          <td> Year</td>
          <td>CVV</td>
          <td colspan="2"></td>
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
            
            echo '<tr class="row-click">
            
            <td><a href="index.php?cardid='.$ID.'" class="card-click" name="cSave">'.$fullName.'</a></td>
            <td><a href="index.php?cardid='.$ID.'" class="card-click" name="cSave">'.$cardNumber.'</a></td>
            <td class="exp-month"><a href="index.php?cardid='.$ID.'" class="card-click" name="cSave">'.$expMonth.'</a></td>
            <td><a href="index.php?cardid='.$ID.'" class="card-click" name="cSave">'.$expYear.'</a></td>
            <td><a href="index.php?cardid='.$ID.'" class="card-click" name="cSave">'.$cvv.'</a></td>
            
            <td><button class="update-btn"><a href="update.php?updateid='.$ID.'">UPDATE</a></button></td>
            <td><button class="delete-btn"><a href="delete.php?deleteid='.$ID.'">DELETE</a></button></td>
             
            </tr>';
        }
      }
        ?>   
      </table>
    </div>
      <div class="button-container">
          <a href="save_card.php" class="add-new-card-btn">Add New Card</a>
        </div>
    </form>
  </div>
</div>
<?php include '../Headers-Footers/footer.php'; ?> 
</html>