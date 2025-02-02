<?php
include '../config.php';

include "./header.php";
?>

<link rel="stylesheet" href="style.css">

<div class="content">
<br>
<center><h1>Bus Management System</h1></center>
<!-- to add new bus details to database-->
<button class="add-button"><a href="add_bus.php" style="color:white;">Add New Bus</a></button>

<center>

<table>
        <tr>
            <th>ID</th>
            <th>Number</th>
            <th>Owner</th>
            <th>Route</th>
            <th>Price(LKR)</th>
            <th>Capacity</th>
            <th>Status</th>
            <th>Time</th>
            <th class="actions">Actions</th>
        </tr>
        <?php 
        
        $sql="SELECT * FROM bus;";
        
        $result=mysqli_query($conn,$sql);

        //if there any pass data from the database
        if(mysqli_num_rows($result)>0){

            /*fetches a single row from the result set $result as an associative array. 
            Each call to this function returns the next row in the result set, or NULL if there are no more rows*/

            while ($bus = mysqli_fetch_assoc($result))//assigns the fetched row to the variable $bus. If there are no more rows, $bus will be NULL
            {
                echo
                "<tr>
                <td>".$bus['busID']."</td>
                <td>".$bus['busNum']."</td>
                <td>".$bus['busOwner']."</td>
                <td>".$bus['route']."</td>
                <td>".$bus['price']."</td>
                <td>".$bus['seatCount']."</td>
                <td>".$bus['status']."</td>
                <td>".$bus['time']."</td>
                <td class='actions'>
                    <button class='edit-button'><a href='update_bus.php?id=".$bus['busID']."'>Edit</a></button><br><br>
                    <button class='delete-button'><a href='delete_bus.php?id=".$bus['busID']."'onclick=\"return confirm('Are you sure?')\">Delete</a></button>
                </td>
            </tr>";
            
            }
        }
        ?>

</table>
</center>
</div>
<br><br><br>
<?php include "../Headers-Footers/footer.php"; ?>

