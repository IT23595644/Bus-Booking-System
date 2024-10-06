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
     include("./header.php");
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
            <form method="post"id="valid" >
                <label>First Name:</label><br>
                <input type="text" name="firstName" id="f_name"><br>
                <div id="name_error1"></div><br>

                <label>Last Name:</label><br>
                <input type="text" name="lastName" id="l_name"><br>
                <div id="name_error2"></div><br>

                <label>Address Name:</label><br>
                <input type="text" name="address" id="address"><br>
                <div id="address_error"></div><br>

                <label>Phone Number:</label><br>
                <input type="text" name="pNum" id="p_num"><br>
                <div id="num_error"></div><br>

                <label>Date Of Birth:</label><br>
                <input type="date" name="dob" id="dob"><br><br>
                <div id="dob_error"></div><br>

                <label>license Id:</label><br>
                <input type="text" name="licenseId" id="licen"><br><br>
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



