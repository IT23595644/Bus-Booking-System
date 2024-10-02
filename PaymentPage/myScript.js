// Validate the entire form
function validateForm(event) {
    const fullName = document.getElementById('cardholder-name').value;
    const cardNumber = document.getElementById('card-number').value;
    const expMonth = document.getElementById('exp-m').value;
    const expYear = document.getElementById('exp-y').value;
    const cvv = document.getElementById('cvv').value;
  
    // Prevent form submission if any field is empty
    if (fullName === "" || cardNumber === "" || expMonth === "" || expYear === "" || cvv === "") {
      alert("Please fill in all the fields.");
      event.preventDefault(); // Prevent form submission
      return false;
    }
  
    // Validate each field
    if (!validateName() || !validateCard() || !validateMonth() || !validateYear() || !validateCVV()) {
      event.preventDefault(); // Prevent form submission if any validation fails
      return false;
    }
  
    return true; // Proceed if all fields are valid
  }
  
  // Validate Cardholder Name
  function validateName() {
    const nameField = document.getElementById('cardholder-name').value;
    if (nameField === "") {
      alert("Name cannot be empty.");
      return false;
    }
    return true;
  }
  
  // Validate Card Number (basic check for length)
  function validateCard() {
    const cardNumber = document.getElementById('card-number').value;
    const regex = /^[0-9]{16}$/; // Basic check for a 16-digit number
    if (!regex.test(cardNumber)) {
      alert("Please enter a valid 16-digit card number.");
      return false;
    }
    return true;
  }
  
  // Validate Expiry Month (should be between 1 and 12)
  function validateMonth() {
    const month = document.getElementById('exp-m').value;
    if (month < 1 || month > 12) {
      alert("Please enter a valid expiration month (1-12).");
      return false;
    }
    return true;
  }
  
  // Validate Expiry Year (should not be in the past)
  function validateYear() {
    const year = document.getElementById('exp-y').value;
    const currentYear = new Date().getFullYear();
    if (year < currentYear) {
      alert("Expiration year cannot be in the past.");
      return false;
    }
    return true;
  }
  
  // Validate CVV (basic check for 3-digit number)
  function validateCVV() {
    const cvv = document.getElementById('cvv').value;
    const regex = /^[0-9]{3}$/; // Basic check for 3-digit CVV
    if (!regex.test(cvv)) {
      alert("Please enter a valid 3-digit CVV.");
      return false;
    }
    return true;
  }
  