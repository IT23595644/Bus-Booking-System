<?php 
    include ('../config.php');
    
    if (isset($_GET['updateid'])) {   
        $id = $_GET['updateid'];
        $sql = "SELECT * FROM busdriver WHERE driverId = $id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {   
        // Get the form data only when the form is submitted
        $dFname = $_POST["firstName"];
        $dLname = $_POST["lastName"];
        $address = $_POST["address"];
        $pnum = $_POST["pnum"];
        $dob = $_POST["dob"];
        $licen = $_POST["licenseId"];

        // Update the driver data
        $sql = "UPDATE busdriver SET firstName='$dFname', lastName='$dLname', address='$address', pNum='$pnum', dob='$dob', licenseId='$licen' WHERE driverId='$id'";
        
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: adddrive.php");
        }
        mysqli_close($conn);
    }
?>



<?php
    include("../Seat Booking page/header.php");
?>

    <link rel="stylesheet" href="crud.css"> 

    <div class="title">
        <h1>Manage Driver</h1>
    </div>
    

    <div class="box">      
      <!--  <div class="button1">
            
            <button type="button" class="button"></button><br>
        </div>-->
        <div>
            <form method="post" >
                <label>First Name:</label><br>
                <input type="text" name="firstName"value="<?php echo"$dFname" ?>"><br>

                <label>Last Name:</label><br>
                <input type="text" name="lastName"value="<?php echo"$dLname" ?>"><br>

                <label>Address Name:</label><br>
                <input type="text" name="address"value="<?php echo"$address" ?>"><br>

                <label>Phone Number:</label><br>
                <input type="text" name="pnum"value="<?php echo"$pnum" ?>"><br>

                <label>Date Of Birth:</label><br>
                <input type="date" name="dob"value="<?php echo"$dob" ?>"><br><br>

                <label>license Id:</label><br>
                <input type="text" name="licenseId"value="<?php echo"$licen" ?>"><br><br>

                <input class="button" type="submit" name="submit">               

            </form>
        </div>
    </div>


    

    <br>
    
<?php
    include("../Headers-Footers/footer.php");
?>



