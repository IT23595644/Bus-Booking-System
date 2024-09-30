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

        if($_SERVER["REQUEST_METHOD"]=="POST")
        {   
            echo "{$_GET['updateid']}";
            $supFname=$_POST["fname"];
            $supLname=$_POST["lname"];
            $address=$_POST["address"];
            $pnum=$_POST["pnum"];
            $dob=$_POST["dob"];

            $sql="UPDATE customersupporter  SET supId='$id',firstName='$fname',lastName='$lname',address='$address',pNum='$pNum',dob='$dob' WHERE supId='$id';";

            
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                header("location: customerview.php");
            }

            mysqli_close($conn);

        }
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
            <form method="post" action="supadd.php">
                <label>First Name:</label><br>
                <input type="text" name="fname" value="<?php echo "$fname" ?>"><br>

                <label>Last Name:</label><br>
                <input type="text" name="lname" value="<?php echo "$lname" ?>"><br>

                <label>Address Name:</label><br>
                <input type="text" name="address" value="<?php echo "$address" ?>"><br>

                <label>Phone Number:</label><br>
                <input type="text" name="pnum" value="<?php echo "$pNum" ?>"><br>

                <label>Date Of Birth:</label><br>
                <input type="text" name="dob" value="<?php echo "$dob" ?>"><br><br>

                <input class="button" type="submit" name="submit">               

            </form>
        </div>
    </div>

    

    <br>
    
<?php
    include("../Headers-Footers/footer.php");
?>


<?php
// Database connection
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL update query using the UPDATE keyword
$sql = "UPDATE table_name SET column1 = 'new_value1', column2 = 'new_value2' WHERE condition_column = 'condition_value'";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
