<?php
    include ('../config.php');
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $dFname=$_POST["firstName"];
        $dLname=$_POST["lastName"];
        $address=$_POST["address"];
        $pnum=$_POST["pNum"];
        $dob=$_POST["dob"];
        $licen=$_POST["licenseId"];



        $sql="INSERT INTO busdriver (firstName,lastName,address,pNum,dob,licenseId)
              VALUES('$dFname','$dLname','$address','$pnum','$dob','$licen')";

        $result=mysqli_query($conn,$sql);
        if($result)
        {
            header("location: adddrive.php");
        }

        mysqli_close($conn);

    }
?>
<?php
    include("../Headers-Footers/header.php");
?>

    <link rel="stylesheet" href="crud.css"> 

    <div class="title">
        <h1>Manage Bus Driver</h1>
    </div>
    

    <div class="box">      
      <!--  <div class="button1">
            
            <button type="button" class="button"></button><br>
        </div>-->
        <div>
            <form method="post" >
                <label>First Name:</label><br>
                <input type="text" name="firstName"><br>

                <label>Last Name:</label><br>
                <input type="text" name="lastName"><br>

                <label>Address Name:</label><br>
                <input type="text" name="address"><br>

                <label>Phone Number:</label><br>
                <input type="text" name="pNum"><br>

                <label>Date Of Birth:</label><br>
                <input type="date" name="dob"><br><br>

                <label>license Id:</label><br>
                <input type="text" name="licenseId"><br><br>

                <input class="button" type="submit" name="submit">               

            </form>
        </div>
    </div>

    

    <br>
    
<?php
    include("../Headers-Footers/footer.php");
?>



