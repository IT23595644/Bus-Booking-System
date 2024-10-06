<?php
    include_once("../config.php");
    include("./header.php");
?>

    <link rel="stylesheet" href="./crud.css"> 
    

    <div class="title">
        <h1>Manage Bus Driver</h1>
    </div>
    
    <div class="box">      
        
            <button type="button" class="button"onclick="document.location='create.php'">
                Add Bus driver
            </button><br>
            
            <table>
            <tr>
                 <th>Bus Driver ID</th><th>First Name</th><th>Last Name</th><th>Address</th><th>Phone Number</th><th>DOB</th><th>License Id</th><th colspan="2">Operation</th>
            </tr>
            <?php
               $sql="SELECT * FROM busdriver;";
               
               $result=mysqli_query($conn,$sql);

               if(mysqli_num_rows($result)>0)
               {    
                    while($row=mysqli_fetch_assoc($result))
                    {
                        echo "<tr><td>".$row['driverId']."<td>". $row['firstName']."</td><td>".$row['lastName']."</td><td>".$row['address']."</td><td>".$row['pNum']."</td><td>".$row['dob']."</td><td>".$row['licenseId']."</td><td>
                        <button class='update-btn'><a href='./updrive.php?updateid=".$row['driverId']."'>UPDATE</a></button></td><td>
                        <button class='delete-btn'><a href='deletedrive.php?deleteid=".$row['driverId']."'onclick=\"return confirm('Are you sure?')\">DELETE</a></button></td></tr>";
                    }
               }
               ?>
             </table>
            

    </div>

    

    <br>
    
<?php
    include("../Headers-Footers/footer.php");
?>











































