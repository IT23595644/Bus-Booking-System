<?php
    include_once("../config.php");
    include("header.php");
?>

    <link rel="stylesheet" href="./booking_crud.css"> 
    <div class="title">
        <h1>Seat Booking History</h1>
    </div>
    

    <div class="box">      
            <div>
                <table>
                <tr>
                    <th>Booking_ID</th><th>Seat_no</th><th>Date</th><th>Bus_ID</th><th>Location</th><th>Destination</th><th>Departure_date</th>
                </tr>
                <?php
                    $sql="SELECT * FROM seatbooks;";
                    
                    $result=mysqli_query($conn,$sql);

                    if(mysqli_num_rows($result)>0)
                    {    
                            while($row=mysqli_fetch_assoc($result))
                            {
                                echo "<tr><td>".$row['bookingId']."<td>". $row['seatNum']."</td><td>".$row['date']."</td><td>".$row['busId']."</td><td>".$row['Location']."</td><td>".$row['Destination']."</td><td>".$row['d_date']."</td>";
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