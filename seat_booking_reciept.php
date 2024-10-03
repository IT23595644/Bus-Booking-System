<?php
     include("config.php"); //Database connection
?>

<?php 
    include("Headers-Footers/header.php"); //Header file
?>
    
    <link rel="stylesheet" href="PaymentReciept/seat_booking_reciept.css">
<div class="body1234">
    <br><br>
    <div class="title">
        <h1>Book Your Seats</h1>
    </div>
    
    <div class="main-section">
        <div class="image-section">

            <style>
                .mySlides {
                    display: none;
                }
                img {
                    vertical-align: middle;
                }

                .slideshow-container {
                    max-width: 1000px;
                    position: relative;
                    margin: auto;
                }

                .dot {
                    height: 15px;
                    width: 15px;
                    margin: 0 2px;
                    background-color: grey;
                    border-radius: 50%;
                    display: inline-block;
                    transition: background-color 0.6s ease;
                }
                .active {
                    background-color: white;
                }
                
                .fade {
                    animation-name: fade;
                    animation-duration: 3.5s;
                }

                @keyframes fade {
                    from {opacity: .4} 
                    to {opacity: 1}
                }
                img{

                }
            </style>
            
             <div class="slideshow-container">

                <div class="mySlides fade">
                    <img src="Seat Booking page/slideshow1.png" style="width:350px; height:320px;">
                </div>

                <div class="mySlides fade">
                    <img src="Seat Booking page/slideshow2.png" style="width:350px; height:320px;">
    
                </div>

                <div class="mySlides fade">
                    <img src="Seat Booking page/slideshow3.png" style="width:350px; height:320px;">
                </div>

                <div style="text-align:center">
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                </div>

            </div>
            
            <script>
                let slideIndex = 0;
                showSlides();

                function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }

                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }

                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }

                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 5000); 
                }

            </script>


        
        </div>

        <div class="booking-form">
           
            <div class="tabs">
                <div class="tab active">Booking Details</div>
            </div>
            
            <div id="Customer Details" class="tabcontent">
                    <?php 
                    
                        $bid=$_SESSION["bookid"];
                         /*$sql="SELECT b.price FROM seatbooks s,bus b where b.busID=s.busId and bookingId='$bid'";
                         $result=mysqli_query($conn,$sql) ;  
                         $row=mysqli_fetch_assoc($result);
                         $price=$row['price'];  */
                         
                        
                         $sql2="SELECT * from seatbooks where bookingId= '$bid'";
                         $result2=mysqli_query($conn,$sql2) ;  
                         $row2=mysqli_fetch_assoc($result2);

                         $_SESSION['sNum']=$row2['seatNum'];
                         $_SESSION['locate']=$row2['Location'];
                         $_SESSION['destine']=$row2['Destination'];
                         $_SESSION['bid']=$row2['busId'];

                        //newlycreated New Table for price
                         $sql1="SELECT * FROM busprice where busID='{$row2['busId']}'";
                         $result=mysqli_query($conn,$sql1) ;  
                         $row=mysqli_fetch_assoc($result);
                         $price=$row['price'];

                         mysqli_close($conn);
                    ?>
                
                    <div class="form">
                    
                     <div class="form-group">
                        <label for="from">From</label>
                        <label for="bus_id"><?php echo $_SESSION['locate']?></label>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="to">To</label>
                        <label for="bus_id"><?php echo $_SESSION['destine']?></label>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="d_date">Departure Date</label>
                        <label for="bus_id"><?php echo $_SESSION['destine']?></label>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="seat_no">Seat No</label>
                        <label for="bus_id"><?php echo $_SESSION['sNum']?></label>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="bus_id">Bus ID</label>
                        <label for="bus_id"><?php echo $_SESSION['bid']?></label>
                    </div>
                    <div class="form-group">
                        <label for="bus_id">Price</label>
                        <label for="bus_id"><?php echo"$price"?></label>
                    </div>
                    <br>
                     <div class="actions">
                        <button type="submit" class="confirm" onclick="document.location='./PaymentPage/payment.php'">Checkout</button>
                        <button onclick="location.href='index.php'" type="button" class="back">Back</button>
                    </div>
                    
                    
                    

                    
            </div>

                
            </div>
        </div>
    </div>
    
</div> 

<?php
    include("Headers-Footers/footer.php");  //Footer file
?>
