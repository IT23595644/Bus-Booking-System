<?php
        include_once("Headers-Footers/header.php");
  ?>
    <link rel="stylesheet" href="../Bus-Booking-System/homepage/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="icon" href="../Bus-Booking-System/Headers-Footers/logo.png" type="image/png">
    
<div class="content">
    <div class="location">
        <div class="locat">
            <p>Travel To</p>
            <div class="places">
                <span>Matara</span>
                <span>Kataragama</span>
                <span>Colombo</span>
                <span>Trincomalee</span>
                <span>Matara</span>
            </div>
        </div>
    </div>

    <section>
        <div class="welc">
            <h1>WELCOME</h1>
            <h3>Your Safe Travel is Our Main Goal</h3>
            <h3>Ride Easy, Ride with Bus365.</h3><br>
           <center><?php if(isset($_SESSION['userId'])){
                            echo '<a href="seat_booking.php"class="book-btn">';
                          }
                          else{
                            echo '<a href="Login page/index.php"class="book-btn">';
                          }             
           ?>
           Book Ticket</a></center>
        </div>
    </section>
</div>
<div class="testimonials">
  <div class="inner">
    <h1>Popular Route</h1>
    <div class="border"></div>
    <div class="card">
        <div class="Route-card" id="blur">
            <img src="homepage/images/new-2.jpg">
            <div class="card-cont">
                <h1>ND - 2256 </h1>
                <p>Matara to Katharagama</p>
                <a href="#" class="card-btn">read more</a>
            </div>
        </div>
        <div class="Route-card"id="blur">
            <img src="../Bus-Booking-System/homepage/images/xx.png">
            <div class="card-cont">
                <h1>NC - 0056 </h1>
                <p>Badulla to Ampara</p>
                <a href="#" class="card-btn">read more</a>
            </div>
        </div>
        <div class="Route-card"id="blur">
            <img src="../Bus-Booking-System/homepage/images/bus1.jpg">
            <div class="card-cont">
                <h1>NB - 1089 </h1>
                <p>Tangalle to Jaffna</p>
                <a href="#" class="card-btn">read more</a>
            </div>
        </div>
    </div>
  </div>
</div>

<div class="testimonials">
    <div class="inner">
      <h1>Why Book with BusSeat?</h1>
      <div class="border"></div>

      <div class="row">
        <div class="col">
                    <ul class="Icon-type">
                        <li><div class="icon">🔍</div>More Choices</li>
                        <li><div class="icon">🙂‍↔️</div>Customer Support</li>
                        <li><div class="icon">🎫</div>Best Price</li>
                        <li><div class="icon">🗺️</div>Google Map Location</li>
                    </ul>
        </div>
      </div>
    </div>
</div>
  <div class="testimonials">
    <div class="inner">
      <h1>User Reviews</h1>
      <div class="border"></div>

      <div class="row">
        <div class="col">
          <div class="testimonial">
            <img src="../Bus-Booking-System/homepage/images/p1.png" alt="">
            <div class="name">Wasika</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>

            <p>
            <h3>Best Passenger Service</h3>
            Overall good experience, and Good passenger service and buses have confortable seats. 
<br>
<h6>Date of experience: April 12, 2024</h6>
            </p>
            <a href="userRating.php" class="card-btn">read more</a>
          </div>
        </div>

        <div class="col">
          <div class="testimonial">
            <img src="../Bus-Booking-System/homepage/images/p2.png" alt="">
            <div class="name">Nethmi</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>

            <p>
            <h3>User friendly Bus Ticket Website</h3>
It was easy to purchase bus tickets on Bus365.lk website. 
Some of the companies do not have admin charge, which is good. Keep it up guys!
<br>
<h6>Date of experience: August 20, 2024</h6>
            </p>
            <a href="userRating.php" class="card-btn">read more</a>
          </div>
        </div>

        <div class="col">
          <div class="testimonial">
            <img src="../Bus-Booking-System/homepage/images/p3.png" alt="">
            <div class="name">Supuni</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>

            <p>
          <h3>  Overall good experience </h3>

            Overall good experience, but can improve on more options for cancel booking and refund
            <br>
            <h6>Date of experience: October 30, 2023</h6>
            </p>
            <a href="userRating.php" class="card-btn">read more</a>
          </div>

        </div>
      </div>
    </div>
  </div>
  <br><br>
  <button id="scrollToTopBtn" onclick="scrollToTop()" title="Go to top"><i class="ri-arrow-up-circle-line"></i></button>
  <div class=fooot>
        <div class="const">
            <div class="Creat">
                <div class="foot-er" id="company"> 
                    <img src="../Bus-Booking-System/Headers-Footers/logo.png" alt="" class="logo">
                    <p> Ride Easy, Ride with Bus365.</p>
                    
                    <div class="social">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                     </p>
                </div>
                <div class="foot-er" id="services"> 
                    <h3>Services</h3>
                    <div class="links">
                        <a href="seat_booking.php">Booking Ticket</a>
                        <a href="./schedule.php">Show Bus Sheduling</a>
                        <a href="../Bus-Booking-System/ContactUs.php">Customer Support Service</a>
                        
                    </div>
                </div>
                <div class="foot-er" id="link">
                    <h3>Links</h3>
                    <div class="links">
                        <a href="../Bus-Booking-System/Terms and Condition/Term&condition.php">Terms & Conditions</a>
                        <a href="../Bus-Booking-System/ContactUs.php">Help & Support</a>
                        <a href="fandQ.php">FAQs</a>
                    </div>
                </div>

                <div class="foot-er" id="contact"> 
                    <h3>Contact</h3>
                    <div class="cont-detail">
                        <i class="fa fa-location"></i>
                        <center><p>BUS365 Online Booking System <br> Matara,Sri Lanka.</p></center>
                    </div>
                    <div class="cont-detail">
                        <i class="fa fa-phone"></i>
                        <p>+94-778045685</p>
                    </div>
                    <div class="cont-detail">
                        <p><a href="#">support@bus365.com</a></p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <p class ="allright"> &copy; 2024 Bus Booking System. All rights reserved.</p>
        <script>
          // Show the button when scrolling down 100px from the top of the document
            window.onscroll = function() {
                scrollFunction();
            };

            function scrollFunction() {
                const scrollToTopBtn = document.getElementById("scrollToTopBtn");
                if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                    scrollToTopBtn.style.display = "block";
                } else {
                    scrollToTopBtn.style.display = "none";
                }
            }

            // Smooth scroll to the top of the page when the button is clicked
            function scrollToTop() {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
              }
    </script>
  </div>

  