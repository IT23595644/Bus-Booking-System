function validateForm() {
    var name = document.getElementById('cardholder-name').value;
    var cardNumber = document.getElementById('card-number').value;
    var month = document.getElementById('exp-m').value;
    var year = document.getElementById('exp-y').value;
    var cvv = document.getElementById('cvv').value;

    if (name === '' || cardNumber === '' || month === '' || year === '' || cvv === '') {
        alert('Please fill in all the fields.');
        return false;
    }
    alert('Card saved successfully!');
    // Add logic to actually save the card information to your database here
}

function validateName() {
    var nameInput = document.getElementById('cardholder-name');
    if (nameInput.value.length < 5) {
        nameInput.style.border= '3px solid red';
    } else {
        nameInput.style.border = '3px solid green';
    }}

function validateCard() {
    var emailInput = document.getElementById('card-number');
    if (nameInput.value.length < 5) {
        emailInput.style.border = '3px solid green';
    } else {
        emailInput.style.border = '3px solid red';
    }
}

function validateMonth() {
    var locationInput = document.getElementById('exp-m');
    if (locationInput.value.length < 5) {
        locationInput.style.border = '3px solid red';
    } else {
        locationInput.style.border = '3px solid green';
    }
}
function validateYear() {
    var locationInput = document.getElementById('exp-y');
    if (locationInput.value.length < 5) {
        locationInput.style.border = '3px solid red';
    } else {
        locationInput.style.border = '3px solid green';
    }
}
function validateCVV() {
    var locationInput = document.getElementById('cvv');
    if (locationInput.value.length < 5) {
        locationInput.style.border = '3px solid red';
    } else {
        locationInput.style.border = '3px solid green';
    }
}    