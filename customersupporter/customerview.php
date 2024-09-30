<?php
    include_once("../config.php");
    include("../Headers-Footers/header.php");
?>

    <link rel="stylesheet" href="../customersupporter/crud.css"> 
    

    <div class="title">
        <h1>Manage Customer Supporters</h1>
    </div>
    

    <div class="box">      
        
            <button type="button" class="button">Add Supporter</button><br>
            
            <table>
            <tr>
              <th>First Name<th>Last Name</th><th>Address</th><th>Phone Number</th><th>DOB</th><th colspan="2">Operation</th>
            </tr>
            <?php
               $sql="SELECT * FROM customersupporter;";
               
               $result=mysqli_query($conn,$sql);

               if(mysqli_num_rows($result)>0)
               {    
                    while($row=mysqli_fetch_assoc($result))
                    {
                        echo "<tr><td>". $row['firstName']."</td><td>".$row['lastName']."</td><td>".$row['address']."</td><td>".$row['pNum']."</td><td>".$row['dob']."</td><td><button class='update-btn'><a href='#'>UPDATE</a></button></td><td><button class='delete-btn'><a href='delete.php?deleteid='>DELETE</a></button></td></tr>";
                    }
               }
               ?>
             </table>
            

    </div>

    

    <br>
    
<?php
    include("../Headers-Footers/footer.php");
?>