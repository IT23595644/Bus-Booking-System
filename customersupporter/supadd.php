<?php
    include ('../config.php');        //database connection

    if($_SERVER["REQUEST_METHOD"]=="POST")     //adding form data into the database
    {
        $supFname=$_POST["fname"];
        $supLname=$_POST["lname"];
        $address=$_POST["address"];
        $pnum=$_POST["pnum"];
        $dob=$_POST["dob"];
                                            
        $sql="INSERT INTO customersupporter (firstName,lastName,address,pNum,dob)    
              VALUES('$supFname','$supLname','$address','$pnum','$dob')";

        $result=mysqli_query($conn,$sql);
        if($result)
        {
            header("location: customerview.php");
        }

        mysqli_close($conn);

    }
?>
<?php
    include("./header2.php");   //header file included
?>
<div class="container">
    
    <link rel="stylesheet" href="form.css"> 
    <br>
    <div class="title">
        <h1>Manage Customer Supporters</h1>
    </div><br>
    
    <div >
        <div class="containerform">        <!--form for adding customer supporters-->
            <form method="post" id="form">
                <div class="inpt">
                    <label>First Name:</label><br>
                    <input type="text" name="fname" id="f_name" >
                    <div id="name_error1"></div><br>
                </div>
                <div class="inpt">
                    <label>Last Name:</label><br>
                    <input type="text" name="lname" id="l_name" >
                    <div id="name_error2"></div><br>
                </div>
                <div class="inpt">
                    <label>Address Name:</label><br>
                    <input type="text" name="address" id="address">
                    <div id="address_error"></div><br>
                </div>
                <div class="inpt">
                    <label>Phone Number:</label><br>
                    <input type="tel" name="pnum" id="p_num">
                    <div id="num_error"></div><br>
                </div> 
                <div class="inpt">
                    <label>Date Of Birth:</label><br>
                    <input type="date" name="dob" id="dob">
                    <div id="dob_error"></div><br><br>
                </div>

                <input class="button"  type="submit" name="submit">               

            </form>
        </div>
    </div>

    

    <br>
</div> 
<script src="./crud.js"></script>     <!--linking java script file-->
<?php
    include("../Headers-Footers/footer.php");  //include footer file
?>


