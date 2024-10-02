<?php
    include_once("../config.php");
    include("../Headers-Footers/header.php");
?>

    <link rel="stylesheet" href="./booking_crud.css"> 
    <script>
        function confirmDelete(bookingId) {
            if (confirm("Are you sure you want to delete this booking?")) {
                window.location.href = './booking_delete.php?deleteid=' + bookingId;
            }
        }
    </script>

    <div class="title">
        <h1>Seat Booking Details</h1>
    </div>
    

    <div class="box">      
            
            <a href="../seat_booking.php" class="button">Book another seat</a>

            <div>
                <table>
                <tr>
                    <th>Booking_ID</th><th>Seat_no</th><th>Date</th><th>Bus_ID</th><th>Location</th><th>Destination</th><th>No_of_passengers</th><th colspan="2">Operation</th>
                </tr>
                <?php
                $sql="SELECT * FROM seatbooks;";
                
                $result=mysqli_query($conn,$sql);

                if(mysqli_num_rows($result)>0)
                {    
                        while($row=mysqli_fetch_assoc($result))
                        {
                            echo "<tr><td>".$row['bookingId']."<td>". $row['seatNum']."</td><td>".$row['date']."</td><td>".$row['busId']."</td><td>".$row['Location']."</td><td>".$row['Destination']."</td><td>".$row['Passengers']."</td><td><button class='update-btn'><a href='./booking_update.php?updateid=".$row['bookingId']."'>UPDATE</a></button></td><td><button class='delete-btn' onclick='confirmDelete({$row['bookingId']})'>DELETE</button></td></tr>";
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