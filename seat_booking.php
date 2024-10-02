<?php
     include("config.php"); //Database connection
?>

<?php 
    include("Headers-Footers/header.php"); //Header file
?>
    
    <link rel="stylesheet" href="Seat Booking page/seat_booking.css">

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
                
                <form method="POST" >
                    
                     <div class="form-group">
                        <label for="from">From</label>
                        <input type="text" id="from" name="from">
                    </div>

                    <div class="form-group">
                        <label for="to">To</label>
                        <input type="text" id="to" name="to">
                    </div>

                    <div class="form-group">
                        <label for="d_date">Departure Date</label>
                        <input type="date" id="d_date" name="d_date" value="2024-10-01" style="width:100%;">
                    </div>

                    <div class="form-group">
                        <label for="seat_no">Seat No</label>
                        <input type="seat_no" id="seat_no" name="seat_no">
                    </div>
                    
                    <div class="form-group">
                        <label for="bus_id">Bus ID</label>
                        <input type="bus_id" id="bus_id" name="bus_id" style="width:310px;">
                    </div>
                   
                     <div class="actions">
                        <button type="submit" class="confirm">Confirm</button>
                        <button onclick="location.href='index.php'" type="button" class="back">Back</button>
                    </div>

                    <a href="schedule.php" style="margin-left:5px;">Click here for scheduling details(Bus Id etc.)</a>

                    <?php
                        include("Seat Booking page/booking_create.php");
                    ?>

                </form>
            </div>
        </div>
    </div>
   
<?php
    include("Headers-Footers/footer.php");  //Footer file
?>
