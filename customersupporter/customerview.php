<?php
    include_once("../config.php");
    include("../Headers-Footers/header.php");
?>

    <link rel="stylesheet" href="./crud.css"> 
    

    <div class="title">
        <h1>Manage Customer Supporters</h1>
    </div>
    

    <div class="box">      
        
            <button type="button" class="button">
                <a class="anchorBtn" style=" padding: 8px; margin-bottom: 10px; width:10px;"href="./supadd.php">Add Supporter</a>
            </button><br>
            
            <table>
            <tr>
                 <th>Customer Supporter ID</th><th>First Name</th><th>Last Name</th><th>Address</th><th>Phone Number</th><th>DOB</th><th colspan="2">Operation</th>
            </tr>
            <?php
               $sql="SELECT * FROM customersupporter;";
               
               $result=mysqli_query($conn,$sql);

               if(mysqli_num_rows($result)>0)
               {    
                    while($row=mysqli_fetch_assoc($result))
                    {
                        echo "<tr><td>".$row['supId']."<td>". $row['firstName']."</td><td>".$row['lastName']."</td><td>".$row['address']."</td><td>".$row['pNum']."</td><td>".$row['dob']."</td><td><button class='update-btn'><a href='./supupdate.php?updateid=".$row['supId']."'>UPDATE</a></button></td><td><button class='delete-btn'><a href='supdelete.php?deleteid=".$row['supId']."'>DELETE</a></button></td></tr>";
                    }
               }
               ?>
             </table>
            

    </div>

    

    <br>
    
<?php
    include("../Headers-Footers/footer.php");
?>