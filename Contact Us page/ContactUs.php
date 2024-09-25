<?php 
    include('config.php')

?>

<!DOCTYPE html>
<html >
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="header_footer.css">
    <link rel="stylesheet" href="contactus.css">
</head>
<body>
    <div class="companyname">
        <center>Bus365</center>
        <label>Book With Your Ease</label>
    </div>   
        <?php 
            include("header.html");
        
        ?>
        <div class="container">
            <div class="box" >
                <div class="heading">
                    <h1>Contact Us</h1>
                    <label >At Bus365, we are committed to making your travel experience seamless and hassle-free. Whether you have a question about your booking, need assistance with our services, or want to provide feedback, we’re here to help.</label><br><br>
                    <pre><b>Customer Support:<b></pre>
                    <ul>
                        <li><span class="icon">📞</span>Phone:0703375900</li>
                        <li><span class="icon">📨</span>Email:support@bus365.com</li>
                        <li><span class="icon">⏰</span>Available: 24/7 for all your booking and travel inquiries</li>
                    </ul>
                </div>       
            </div>
            <div class="box">
                <div class="heading">
                    <h1>Feel Free to Ask</h1><br>
                    If You Have Anything to ask!!!
                    <fieldset>
                        <legend>Fill This</legend>
                        <form action="ContactUs.php" method="get">
                            <label>Your Name:</label><br>
                            <input type="text" name="name"><br>
                            <label>Your Email:</label><br>
                            <input type="text" name="email"><br>
                            <label>Your Message:</label><br>
                            <textarea name="msg"></textarea><br>
                            <input class="btn"type="submit" name="submit"><br>
                        </form>
                    </fieldset>
                </div>       
            </div>
        
        
        
        </div>
        <div>
            <?php
                include("footer.html");
            
            ?>
        </div>
        
    
</body>
<?php
    if(isset($_GET["submit"])){
        $name=$_GET["name"];
        $email=$_GET["email"];
        $message=$_GET["msg"];

        if(empty($name)){
            echo'<script>confirm("Name missing")</script>';
            
        }
        elseif(empty($email)){
            echo'<script>confirm("email missing")</script>';
        }
        elseif(empty($message)){
            echo'<script>confirm("message missing")</script>';
        }
        else{
            $sql="INSERT INTO questions(name,email,msg)
                  VALUES('$name','$email','$message')";
                  echo"You are Registered";
            mysqli_query($conn,$sql);
        }
        
           

        }

            
            /*
        }*/
    
    
    mysqli_close($conn);
?>
</html>