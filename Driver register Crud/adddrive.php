<?php
    include_once("../config.php"); //make connection with database with config file
    include("./header.php");       //include header file
?>

    <link rel="stylesheet" href="./crud.css"> <!-- link css file-->
    

    <div class="title">
        <h1>Manage Bus Driver</h1>
    </div>
    
    <div class="box">      
        
            <button type="button" class="button"onclick="document.location='create.php'"> <!--Button onlick work on on the create.php-->
                Add Bus driver
            </button><br>
            
            <table>   <!--Draw table -->
            <tr>
                 <th>Bus Driver ID</th><th>First Name</th><th>Last Name</th><th>Address</th><th>Phone Number</th><th>DOB</th><th>License Id</th><th colspan="2">Operation</th> <!--Table heading-->
            </tr>
            <?php
               $sql="SELECT * FROM busdriver;"; //pass the sql varible all data pass of the database table
               
               $result=mysqli_query($conn,$sql); //result passthe connection query

               if(mysqli_num_rows($result)>0)   
               {    
                    while($row=mysqli_fetch_assoc($result)) //fech all bdatabse table data 
                    {
                        echo "<tr><td>".$row['driverId']."<td>". $row['firstName']."</td><td>".$row['lastName']."</td><td>".$row['address']."</td><td>".$row['pNum']."</td><td>".$row['dob']."</td><td>".$row['licenseId']."</td><td> 
                        <button class='update-btn'><a href='./updrive.php?updateid=".$row['driverId']."'>UPDATE</a></button></td><td>
                        <button class='delete-btn'><a href='deletedrive.php?deleteid=".$row['driverId']."'onclick=\"return confirm('Are you sure?')\">DELETE</a></button></td></tr>";
                    }
               }    //display the database table of content
               ?>
             </table>
            

    </div>

    

    <br>
    
<?php
    include("../Headers-Footers/footer.php"); //include footer 
?>











































