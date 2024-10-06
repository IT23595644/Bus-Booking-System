function AddBus(){

    var priceValue = document.getElementById("price").value;
    var seatCount = document.getElementById("seatCount").value;

    if (isNaN(priceValue) || isNaN(seatCount)) {
        alert("Price and Seat Count must be numbers!");
        return;
    }

    if(priceValue<0){
        alert("Please enter valid value for Price!");
        return;
    }

    else if(seatCount<0 || seatCount>100){
        alert("Please enter valid value(0-100) for seatCount!");
        return;
    }

    else{
    alert("Bus Details Added Successfully!");
    }

}