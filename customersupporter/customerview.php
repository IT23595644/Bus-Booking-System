<?php
    include_once("../config.php");
    include("../Seat Booking page/header.php");
?>

    <link rel="stylesheet" href="./crud.css"> 
    

    <div class="title">
        <h1>Manage Customer Supporters</h1>
    </div>
    

    <div class="box">      
        
            <button type="button" class="button" onclick="document.location='./supadd.php'">
                Add Supporter
            </button><br>
            
            <table>
            <tr>
                <th>CS_ID</th><th>First Name</th><th>Last Name</th><th>Address</th><th>Phone Number</th><th style="width:100px">DOB</th><th colspan="2">Operation</th>
            </tr>
            <?php
               $sql="SELECT * FROM customersupporter;";
               
               $result=mysqli_query($conn,$sql);

               if(mysqli_num_rows($result)>0)
               {    
                    while($row=mysqli_fetch_assoc($result))
                    {
                        echo "<tr><td>".$row['supId']."<td>". $row['firstName']."</td><td>".$row['lastName']."</td><td>".$row['address']."</td><td>".$row['pNum']."</td><td>".$row['dob']."</td><td><button class='update-btn'><a href='./supupdate.php?updateid=".$row['supId']."'>UPDATE</a></button></td>
                              <td><button class='delete-btn'onclick=\"return confirm('Are you sure?')\"><a href='supdelete.php?deleteid=".$row['supId']."'>DELETE</a></button></td></tr>";
                    }
               }
               ?>
             </table>
            

    </div>

    

    <br><br><br>
    
<?php
    include("../Headers-Footers/footer.php");
?>