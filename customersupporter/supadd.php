<?php
    include ('../config.php');
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $supFname=$_POST["fname"];
        $supLname=$_POST["lname"];
        $address=$_POST["address"];
        $pnum=$_POST["pnum"];
        $dob=$_POST["dob"];

        $sql="INSERT INTO customersupporter (firstName,lastName,address,pNum,dob)
              VALUES('$supFname','$supLname','$address','$pnum','$dob')";



        mysqli_query($conn,$sql);


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
            <form method="post" action="supadd.php">
                <label>First Name:</label><br>
                <input type="text" name="fname"><br>

                <label>Last Name:</label><br>
                <input type="text" name="lname"><br>

                <label>Address Name:</label><br>
                <input type="text" name="address"><br>

                <label>Phone Number:</label><br>
                <input type="text" name="pnum"><br>

                <label>Date Of Birth:</label><br>
                <input type="text" name="dob"><br><br>

                <input class="button" type="submit" name="submit">               

            </form>
        </div>
    </div>

    

    <br>
    
<?php
    include("../Headers-Footers/footer.php");
?>


