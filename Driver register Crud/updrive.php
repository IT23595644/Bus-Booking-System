<?php 
    include ('../config.php');
    
    if (isset($_GET['updateid'])) {   
        $id = $_GET['updateid'];
        $sql = "SELECT * FROM busdriver WHERE driverId = $id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        $firstName=$row['firstName'];
        $lastName=$row['lastName'];
        $address=$row['address'];
        $pNum=$row['pNum'];
        $dob=$row['dob'];
        $licenseId = $row["licenseId"];
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
    include("./header.php");
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
            <form method="post" id="valid" >
            <label>First Name:</label><br>
                <input type="text" name="firstName" id="f_name" value="<?php echo"$firstName" ?>"><br>
                <div id="name_error1"></div><br>

                <label>Last Name:</label><br>
                <input type="text" name="lastName" id="l_name"value="<?php echo"$lastName" ?>"><br>
                <div id="name_error2"></div><br>

                <label>Address Name:</label><br>
                <input type="text" name="address" id="address"value="<?php echo"$address" ?>"><br>
                <div id="address_error"></div><br>

                <label>Phone Number:</label><br>
                <input type="text" name="pNum" id="p_num"value="<?php echo"$pNum" ?>"><br>
                <div id="num_error"></div><br>

                <label>Date Of Birth:</label><br>
                <input type="date" name="dob" id="dob"value="<?php echo"$dob" ?>"><br><br>
                <div id="dob_error"></div><br>

                <label>license Id:</label><br>
                <input type="text" name="licenseId" id="licen"value="<?php echo"$licenseId" ?>"><br><br>
                <div id="licen_error"></div><br>

                <input class="button" type="submit" name="submit">               

            </form>
        </div>
    </div>


    <script src="./crud.js"></script>

    <br>
    
<?php
    include("../Headers-Footers/footer.php");
?>



