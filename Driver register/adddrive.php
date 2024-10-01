<?php
        include_once("../Headers-Footers/header.php");
        include_once("../config.php");
  ?>

   <div class="container">
        <h3>Manage Bus Driver</h3>
    </div>
    <div class="box">
       <button type="button" class="button"><a href="create.php">Add Supporter</a></button><br>
        <table>
            <tr>
                <th>Bus Driver ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>DOB</th>
                <th>License Id</th>
            </tr>
        
        <?php
        $sql="SELECT * FROM busdriver";
        $result=$conn->query($sql);

        if(!$result){
            die("Invalid query: ".$connection->error);
        }
        while($row=$result->fetch_assoc()){
            echo "
            <tr>
                <td>$row[driverId]</td>
                <td>$row[firstName]</td>
                <td>$row[lastName]</td>
                </td>$row[address]</td>
                </td>$row[pNum]</td>
                </td>$row[dob]</td>
                </td>$row[licenseId]</td>
                </td>$row[regDate]</td>
                <td><button class='update-btn'><a href='./supupdate.php?updateid=".$row['driverId']."'>UPDATE</a></button></td><td><button class='delete-btn'><a href='supdelete.php?deleteid=".$row['driverId']."'>DELETE</a></button></td></tr>;
            ";
        }

        
        ?>
       </table>
    </div>
    <br>
    <?php
    include("../Headers-Footers/footer.php");
    ?>