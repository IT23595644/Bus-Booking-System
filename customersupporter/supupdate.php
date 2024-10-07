<?php 
    include ('../config.php');     //connection to the database

    if(isset($_GET['updateid'])){          //get the past values from customersupporter table and auto fill the data in update form
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
        
    if($_SERVER["REQUEST_METHOD"]=="POST")      //update the form with new values
    {   
            
        $supFname=$_POST["fname"];
        $supLname=$_POST["lname"];
        $address=$_POST["address"];
        $pnum=$_POST["pnum"];
        $dob=$_POST["dob"];
        echo $supFname ;
        $sql="UPDATE customersupporter  SET firstName='$supFname',lastName='$supLname',address='$address',pNum='$pnum',dob='$dob' 
              WHERE supId='$id';";

            
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            header("location: customerview.php");
        }

            mysqli_close($conn);

    }

?>


<?php
    include("./header2.php");     //header file
?>

<div class="container">
    
    <link rel="stylesheet" href="form.css"> 
    <br>
    <div class="title">
        <h1>Manage Customer Supporters</h1>
    </div><br>
    
    <div >
        <div class="containerform">      <!--Update form-->
            <form method="post" id="form">
                <div class="inpt">
                    <label>First Name:</label><br>
                    <input type="text" name="fname" id="f_name" value="<?php echo"$fname" ?>" >
                    <div id="name_error1"></div><br>
                </div>
                <div class="inpt">
                    <label>Last Name:</label><br>
                    <input type="text" name="lname" id="l_name" value="<?php echo"$lname" ?>" >
                    <div id="name_error2"></div><br>
                </div>
                <div class="inpt">
                    <label>Address Name:</label><br>
                    <input type="text" name="address" id="address" value="<?php echo"$address" ?>">
                    <div id="address_error"></div><br>
                </div>
                <div class="inpt">
                    <label>Phone Number:</label><br>
                    <input type="tel" name="pnum" id="p_num" value="<?php echo"$pNum" ?>">
                    <div id="num_error"></div><br>
                </div> 
                <div class="inpt">
                    <label>Date Of Birth:</label><br>
                    <input type="date" name="dob" id="dob" value="<?php echo"$dob" ?>">
                    <div id="dob_error"></div><br><br>
                </div>

                <input class="button"  type="submit" name="submit">               

            </form>
        </div>
    </div>

    

    <br>
</div> 
<script src="./crud.js"></script>      <!--connecting java script file-->
<?php
    include("../Headers-Footers/footer.php");   //include the footer
?>

