 // Get the modal
 var modal = document.getElementById("paymentModal");

 // Get the button that opens the modal
 var btn = document.getElementById("paymentBtn");

 // Get the <span> element that closes the modal
 var span = document.getElementsByClassName("close")[0];

 // Get the Save & Confirm button
 var saveConfirmBtn = document.getElementById("saveConfirm");

 // When the user clicks the button, open the modal 
 btn.onclick = function() {
     modal.style.display = "block";
 }

 // When the user clicks on <span> (x), close the modal
 span.onclick = function() {
     modal.style.display = "none";
 }

 // When the user clicks anywhere outside of the modal, close it
 window.onclick = function(event) {
     if (event.target == modal) {
         modal.style.display = "none";
     }
 }

 // When the user clicks on Save & Confirm, close the modal
 saveConfirmBtn.onclick = function() {
     // Check if the form is filled
     var cardNumber = document.getElementById("card-number").value;
     var cardholderName = document.getElementById("cardholder-name").value;
     var expMM = document.getElementById("exp-mm").value;
     var expYY = document.getElementById("exp-yy").value;
     var cvv = document.getElementById("cvv").value;

     // Check if all fields are filled
     if (cardNumber && cardholderName && expMM && expYY && cvv) {
         alert("Payment details saved!");
         modal.style.display = "none"; // Close the modal
     } else {
         alert("Please fill in all fields!");
     }
 }
     /*
     saveConfirmBtn.onclick = function(event) {
        // Prevent form submission
        event.preventDefault();
    
        // Check if the form is filled
        var cardNumber = document.getElementById("card-number").value;
        var cardholderName = document.getElementById("cardholder-name").value;
        var expMM = document.getElementById("exp-mm").value;
        var expYY = document.getElementById("exp-yy").value;
        var cvv = document.getElementById("cvv").value;
    
        // Check if all fields are filled
        if (cardNumber && cardholderName && expMM && expYY && cvv) {
            alert("Payment details saved!");
            modal.style.display = "none"; // Close the modal
        } else {
            alert("Please fill in all fields!");
        }
    };*/
    