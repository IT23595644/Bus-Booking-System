nError = document.getElementById('name-error');
cError = document.getElementById('card-error');
mError = document.getElementById('month-error');
yError = document.getElementById('year-error');
cvvError = document.getElementById('cvv-error');  

function validateName(){
    var name = document.getElementById('cardholder-name').value;
    if(name.length == 0){
        nError.style = "color: red;";
        nError.innerHTML = "Name is required";
        return false;
    }
    else{
        nError.style = "color: green;";
        nError.innerHTML = "Valid";
        return true;
    }
}

function validateCard(){
    var card = document.getElementById('card-number').value;
    if(card.length == 0){
        cError.style = "color: red;";
        cError.innerHTML = "Card number is required";
        return false;
    }
    if(isNaN(card)){
        cError.style = "color: red;";
        cError.innerHTML = "Must be a number";
        return false;
    }
    else if(card.length != 16){
        cError.style = "color: red;";
        cError.innerHTML = "Must be 16 digits";
        return false;
    }
    else{
        cError.style = "color: green;";
        cError.innerHTML = "Valid";
        return true;
    }
}

function validateMonth(){
    var month = document.getElementById('exp-m').value;
    if(month.length == 0){
        mError.style = "color: red;";
        mError.innerHTML = "Month is required";
        return false;
    }
    if(isNaN(month)){
        mError.style = "color: red;";
        mError.innerHTML = "Must be a number";
        return false;
    }
    else if(month < 1 || month > 12){
        mError.style = "color: red;";
        mError.innerHTML = "Invalid month";
        return false;
    }
    else{
        mError.style = "color: green;";
        mError.innerHTML = "Valid";
        return true;
    }
}

function validateYear(){
    var year = document.getElementById('exp-y').value;
    if(year.length == 0){
        yError.style = "color: red;";
        yError.innerHTML = "Year is required";
        return false;
    }
    if(isNaN(year)){
        yError.style = "color: red;";
        yError.innerHTML = "Must be a number";
        return false;
    }
    else if(year < 2024){
        yError.style = "color: red;";
        yError.innerHTML = "Invalid year";
        return false;
    }
    else{
        yError.style = "color: green;";
        yError.innerHTML = "Valid";
        return true;
    }
}  

function validateCVV(){
    var cvv = document.getElementById('cvv').value;
    if(cvv.length == 0){
        cvvError.style = "color: red;";
        cvvError.innerHTML = "CVV is required";
        return false;
    }
    if(isNaN(cvv)){
        cvvError.style = "color: red;";
        cvvError.innerHTML = "Must be a number";
        return false;
    }
    else if(cvv.length != 3){
        cvvError.style = "color: red;";
        cvvError.innerHTML = "Invalid CVV ";
        return false;
    }
    else{
        cvvError.style = "color: green;";
        cvvError.innerHTML = "Valid";
        return true;
    }
}

function payNow(){
    if(validateName() && validateCard() && validateMonth() && validateYear() && validateCVV()){
        alert("Payment Successful!");
    }
    else{
        alert("Payment Failed!");
    }
}