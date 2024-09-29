/*  // Get the modal
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
 } */
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
    
    // Get elements
const openPopupBtn = document.getElementById('openPopupBtn');
const popupBox = document.getElementById('popupBox');
const popupBox2 = document.getElementById('popupBox2');
const closePopup = document.getElementById('closePopup');
const closePopup2 = document.getElementById('closePopup2');
const nextBtn = document.getElementById('nextBtn');
const submitNewOption = document.getElementById('submitNewOption');

// Open first popup
openPopupBtn.addEventListener('click', (event) => {
  event.preventDefault(); // Prevent default button behavior
  popupBox.classList.add('show');
  popupBox.classList.remove('hide');
});

// Close first popup with animation
closePopup.addEventListener('click', () => {
  popupBox.classList.add('hide');
  setTimeout(() => {
    popupBox.classList.remove('show');
  }, 400);  // Match the CSS transition time
});

// Close second popup with animation
closePopup2.addEventListener('click', () => {
  popupBox2.classList.add('hide');
  setTimeout(() => {
    popupBox2.classList.remove('show');
  }, 400);  // Match the CSS transition time
});

// Next button event listener
nextBtn.addEventListener('click', () => {
  const selectedOption = document.querySelector('input[name="option"]:checked');
  if (selectedOption && selectedOption.value === 'addNew') {
    // Close first popup with slide out animation
    popupBox.classList.add('hide');
    setTimeout(() => {
      popupBox.classList.remove('show');
      
      // Open second popup with slide in animation
      popupBox2.classList.remove('hide');
      popupBox2.classList.add('show', 'slide-in');
    }, 400);  // Delay to match the transition
  }
});

// Submit new option
submitNewOption.addEventListener('click', () => {
  const newOptionValue = document.getElementById('newOption').value;
  if (newOptionValue) {
    alert(`New option "${newOptionValue}" submitted!`);
    popupBox2.classList.add('hide');
    setTimeout(() => {
      popupBox2.classList.remove('show');
    }, 400);  // Match the CSS transition time
  }
});


// Submit new option and refresh card list
submitNewOption.addEventListener('click', () => {
  const formData = new FormData(document.getElementById('popupForm2'));
  
  fetch('index.php', {
    method: 'POST',
    body: formData,
  })
  .then(data => {
    alert('Card saved 123 successfully');
    // Fetch the updated card list
    fetch('index.php') // Create this PHP file to get the updated list
        .then(response => response.json())
        .then(cards => {
            // Update your options based on the fetched data
        });
    // Close second popup
    popupBox2.classList.add('hide');
    setTimeout(() => {
        popupBox2.classList.remove('show');
    }, 400);
})});
