<?php
    include ("config.php");
    include("./Headers-Footers/header.php");
?>

<link rel="stylesheet" href="./schedule_page/schedule.css">

<div class="containerSchedule">
    <br>
    <h2 class="pageTitle">Bus Schedule<h2>

    <br>
        <table>
            <tr>
                <th>Bus ID</th>
                <th>Bus Number-Plate</th>
                <th>Route</th>
                <th>Price</th>
                <th>Time</th>
            </tr>

        <?php
        echo "";
                
        $sql="SELECT * FROM bus;";

        $result=mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($result)>0)
        {    
             while($row=mysqli_fetch_assoc($result)){
                echo "<tr><td>".$row['busID']."</td>
                      <td>".$row['busNum']."</td>
                      <td>".$row["route"]."</td>
                      <td>".$row["price"]."</td>
                      <td>".$row["time"]."</td></tr>";
             }
        }
        ?>
        
        </table>




</div>

<?php 
    include ("./Headers-Footers/footer.php")
?>