<?php
        include_once("Headers-Footers/header.php");
  ?>
    
    <title>User Ratings</title>
    <link rel="stylesheet" href="../Bus-Booking-System/Use Rating/rating.css">
    <script src="../Bus-Booking-System/Use Rating/ratings.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <div class="testimonials">
        <div class="inner">
          <h1>User Ratings And  Reviews</h1>
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
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                </p>
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
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                </p>
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
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="testimonials">
        <div class="inner">
            <div class="row">
            <div class="col">
              <div class="testimonial">
                <img src="../Bus-Booking-System/homepage/images/p4_1.jpg" alt="">
                <div class="name">Anuradha</div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                  <i class="far fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
    
                <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                </p>
              </div>
            </div>
    
            <div class="col">
              <div class="testimonial">
                <img src="../Bus-Booking-System/homepage/images/p5.jpg" alt="">
                <div class="name">Saraka</div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
    
                <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                </p>
              </div>
            </div>
    
            <div class="col">
              <div class="testimonial">
                <img src="../Bus-Booking-System/homepage/images/p1.png" alt="">
                <div class="name">Pethum</div>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
    
                <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                </p>
              </div>
            </div>
          </div>
        </div>
    </div>
        <div class="testimonials">
            <div class="inner">
                <h1>Give Ratings And  Reviews</h1>
                    <div class="rating-form">
                    <form method="post" action="submit_review.php">
                        <label for="message">Review:</label>
                        <textarea id="message" name="message" placeholder="Type your review"></textarea>
                        <p>Give Rating:</p>
                        <div class="rating">
                            <span class="star" data-value="5">&#9733;</span>
                            <span class="star" data-value="4">&#9733;</span>
                            <span class="star" data-value="3">&#9733;</span>
                            <span class="star" data-value="2">&#9733;</span>
                            <span class="star" data-value="1">&#9733;</span>
                        </div>
                        <button type="submit">Submit</button>
    </form>
                        </div>
                </div>
        </div>
    </div>
    <br>
    <?php
        include_once("../Bus-Booking-System/Headers-Footers/footer.php");
    ?>
  
