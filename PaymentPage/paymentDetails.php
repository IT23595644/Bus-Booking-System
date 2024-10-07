<?php
    include_once("../config.php");
    include("header.php");
?>

    <link rel="stylesheet" href="./paymentcrud.css"> 
    <script>
        function confirmDelete(bookingId) {
            if (confirm("Are you sure you want to delete this booking?")) {
                window.location.href = './booking_delete.php?deleteid=' + bookingId;
            }
        }
    </script>

    <div class="title">
        <h1>Payment Details</h1>
    </div>
    

    <div class="box">      

            <div>
                <a href="./save_card.php" class="button">Add another card</a>
                <table>
                <tr>
                    <th>Full Name</th><th>Card Number</th><th>Month</th><th>Year</th><th>CVV</th><th colspan="2">Operation</th>
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
            
            <td>'.$fullName.'</td>
            <td>'.$cardNumber.'</td>
            <td class="exp-month">'.$expMonth.'</td>
            <td>'.$expYear.'</td>
            <td>'.$cvv.'</td>
            
            <td><button class="update-btn"><a href="update_user.php?updateid='.$ID.'">UPDATE</a></button></td>
            <td><button class="delete-btn" onclick="return confirm(\'Are you sure?\')"><a href="delete_user.php?deleteid='.$ID.'">DELETE</a></button></td>
             
            </tr>';
                    }
                }
                ?>

                </table>
            </div>
    </div>
    <br><br>
<?php
    include("../Headers-Footers/footer.php");
?>