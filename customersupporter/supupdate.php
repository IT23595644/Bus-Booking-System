<?php 
    include ('../config.php');
        
        if(isset($_GET['updateid'])){   
            $id=$_GET['updateid'];
        $sql="SELECT * FROM customersupporter where supId=$id";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);

        $fname=$row['firstName'];
        $lname=$row['lastName'];
        $address=$row['address'];
        $pNum=$row['pNum'];
        $dob=$row['dob'];
        
        }   
        
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {   
            
            $supFname=$_POST["fname"];
            $supLname=$_POST["lname"];
            $address=$_POST["address"];
            $pnum=$_POST["pnum"];
            $dob=$_POST["dob"];
            echo $supFname ;
            $sql="UPDATE customersupporter  SET firstName='$supFname',lastName='$supLname',address='$address',pNum='$pnum',dob='$dob' WHERE supId='$id';";

            
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                header("location: customerview.php");
            }

            mysqli_close($conn);

        }

?>


<?php
    include("../Headers-Footers/header.php");
?>

    <link rel="stylesheet" href="crud.css"> 

    <div class="title">
        <h1>Manage Customer Supporters</h1>
    </div>
    

    <div class="box">      
      <!--  <div class="button1">
            
            <button type="button" class="button"></button><br>
        </div>-->
        <div>
            <form method="post" >
                <label>First Name:</label><br>
                <input type="text" name="fname" ><br>

                <label>Last Name:</label><br>
                <input type="text" name="lname" ><br>

                <label>Address Name:</label><br>
                <input type="text" name="address" ><br>

                <label>Phone Number:</label><br>
                <input type="tel" name="pnum" ><br>

                <label>Date Of Birth:</label><br>
                <input type="date" name="dob" ><br><br>

                <input class="button" type="submit" name="submit" value="Update">               

            </form>
        </div>
    </div>

    

    <br>
    
<?php
    include("../Headers-Footers/footer.php");
?>



