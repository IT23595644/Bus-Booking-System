<?php
include '../config.php'; 
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
    background-color:#ccc;
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
<?php 
    session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bus365</title>
        <link rel="icon" href="../Headers-Footers/logo.png" type="image/jpg">
        <script src="myScript.js"></script>
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

<div class="body12">
<div class="card-box">
    <h2><a href="payment.php" style="text-decoration: none; color:black;">Choose an Option</a></h2>
    <form method="POST" action="">
    <div class="payment-details box">
      <table>
        <tr>
          <td>Full Name</td>
          <td>Card Number</td>
          <td> Month</td>
          <td> Year</td>
          <td>CVV</td>
          <td colspan="2">Operations</td>
        </tr>
        <?php
        $query = "SELECT * FROM paymentdetails";
        $result = mysqli_query($conn, $query);
        if($result){
          while ($row = mysqli_fetch_assoc($result)) {
            $ID = $row['payCardId'];
            $fullName = $row['fullName'];
            $cardNumber = $row['cardNum'];
            $expMonth = $row['month'];
            $expYear = $row['year'];
            $cvv = $row['cvv'];
            
            echo '<tr class="row-click">
            
            <td><a href="payment.php?cardid='.$ID.'" class="card-click" name="cSave">'.$fullName.'</a></td>
            <td><a href="payment.php?cardid='.$ID.'" class="card-click" name="cSave">'.$cardNumber.'</a></td>
            <td class="exp-month"><a href="payment.php?cardid='.$ID.'" class="card-click" name="cSave">'.$expMonth.'</a></td>
            <td><a href="payment.php?cardid='.$ID.'" class="card-click" name="cSave">'.$expYear.'</a></td>
            <td><a href="payment.php?cardid='.$ID.'" class="card-click" name="cSave">'.$cvv.'</a></td>
            
            <td><button class="update-btn"><a href="update.php?updateid='.$ID.'">UPDATE</a></button></td>
            <td><button class="delete-btn" onclick="return confirm(\'Are you sure?\')"><a href="delete.php?deleteid='.$ID.'">DELETE</a></button></td>
            
            </tr>';
        }      
      }
      mysqli_close($conn);
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
<button class="delete-btn" onclick="return confirm('Are you sure?')">
    Delete
</button>
