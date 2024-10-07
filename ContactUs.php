<?php 
    include('config.php')    //database connection
?>
        <?php
        include_once("Headers-Footers/header.php");    //header file
        ?>
        <link rel="stylesheet" href="Contact Us page/contactus.css">
        <div class="container">
            <div class="box" >
                <div class="heading">
                    <h1>Contact Us</h1>
                    <label >At Bus365, we are committed to making your travel experience seamless and hassle-free. Whether you have a question about your booking, need assistance with our services, or want to provide feedback, we are here to help.</label><br><br>
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
                        <form action="ContactUs.php" method="post">      <!--messages form-->
                            
                                <label>Your Name:</label><br>
                                <input class="fdata" type="text" name="name"  required><br>
                                <label>Your Email:</label><br>
                                <input class="fdata" type="email" name="email"  required><br>
                                <label>Your Message:</label><br>
                                <textarea class="fdata" name="msg" style="width:30%;padding:10px;border-radius:10px;" required></textarea><br>
                                <input class="btn"type="submit" name="submit"><br>
                            
                        </form>
                    </fieldset>
                </div>   
            <div>
        </div>
        
    <?php
        include_once("Headers-Footers/footer.php");     //footerfile
    
    ?>
    
</body>
</html>
<?php                                                //insert to a table of database
    if(isset($_POST["submit"])){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $message=$_POST["msg"];

        $sql="INSERT INTO questions(name,email,msg)
               VALUES('$name','$email','$message')";
               
                  
        mysqli_query($conn,$sql);
      
    }
    mysqli_close($conn);
?>
