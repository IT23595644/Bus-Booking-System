
<?php
        include_once("../Headers-Footers/header.php");
  ?>
   <link rel="stylesheet" href="../F&Q/fq.css">
   <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

   <div>
   <div class="wrapper">
      <h1>Frequently Asked Questions</h1>

      <div class="faq">
        <button class="accordion">
         📛Booking and Tickets
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <h4>🔶How do I book a bus ticket online?</h4>
          <p>
          You can book from our website or mobile apps by selecting your departure and destination points,
           journey date, preferred bus, and seat. Then, fill in your details and complete the payment.
          </p>
          <br>
          <h4>🔶Can I book tickets for someone else?</h4>
          <p>
          Yes, you can book tickets for friends, family, or colleagues. They will need to present the ticket when boarding.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
        📛Payments and Safety
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <h4>🔶What payment methods are accepted?</h4>
          <p>
          We accept credit and debit cards. If you don’t have access to online payments,
          bank transfers are also accepted, although they may involve more hassle.
          </p>
          <br>
          <h4>🔶Is it safe to provide my payment information online?</h4>
          <p>
          Yes, it’s safe. We use a payment gateway authorized by the Central Bank of Sri Lanka and have been a registered company in Sri Lanka for 10 years.
          </p>
          <br>
          <h4>🔶How is my personal information protected?</h4>
          <p>
          Your information is protected and only shared with the relevant bus operators to coordinate your booking. For more details, 
          please see our Privacy Policy.
          </p>
          <br>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
        📛Cancellations and Refunds
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
        <h4>🔶How do I cancel my booking, and will I receive a refund?</h4>
          <p>
          ou can cancel your booking through our website or mobile app. Refunds are issued based on the bus operator's cancellation policy, which is displayed during the booking process. 
          If eligible, the refund will be processed to your bank account within 7 working days.
          </p>
          <br>
          <h4>🔶What is your refund policy and are there any fees?</h4>
          <p>
          Refunds are processed according to the specific cancellation policy of the bus operator. 
          Some fees may apply, which are outlined when you make your booking. There are no additional fees for processing refunds.
          </p>
          <br>
          <h4>🔶What if I only need to cancel part of my trip or the bus is canceled by the operator?</h4>
          <p>
          If you cancel only part of your trip, a partial refund will be issued. If the bus service is canceled by the operator,
           you’ll receive a full refund or you can choose to keep the amount in your wallet for another booking.
          </p>
          <br>

        </div>
      </div>

      <div class="faq">
        <button class="accordion">
        📛Customer Support and Feedback
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
        <h4>🔶How can I contact customer support?</h4>
          <p>
          You can reach us via our hotline or support email, details of which are available on our "Contact Us" page.
          </p>
          <br>
          <h4>🔶What should I do if I face issues during booking?</h4>
          <p>
          Please contact our customer support for assistance. If possible, take screenshots and share them with us.
          </p>
          <br>
          <h4>🔶What are your operating hours?</h4>
          <p>
          Our customer support team is available daily from 7 am to 6 pm. For issues with boarding or locating the bus, 
          you can directly contact the bus operator using the contact details provided.
          </p>
          <br>
        </div>
      </div>

    </div>
</div>
    <script>
      var acc = document.getElementsByClassName("accordion");
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
          this.classList.toggle("active");
          this.parentElement.classList.toggle("active");

          var pannel = this.nextElementSibling;

          if (pannel.style.display === "block") {
            pannel.style.display = "none";
          } else {
            pannel.style.display = "block";
          }
        });
      }
    </script>

<?php
        include_once("../Headers-Footers/footer.php");
 ?>
