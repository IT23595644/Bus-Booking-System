function AddBus(event) {
    event.preventDefault();

    var priceValue = parseFloat(document.getElementById("price").value);
    var seatCount = parseInt(document.getElementById("seatCount").value);
    var time = parseFloat(document.getElementById("time").value);

    if (isNaN(priceValue) || isNaN(seatCount) || isNaN(time)) {
        alert("Price, Seat Count, and Time must be numbers!");
        return; 
    }

    if (priceValue < 0) {
        alert("Please enter a valid value for Price!");
        return; 
    }

    if (seatCount < 0 || seatCount > 100) {
        alert("Please enter a valid value (0-100) for Seat Count!");
        return; 
    }

    if (time < 0 || time > 24) {
        alert("Please enter a valid value (0-24) for Time!");
        return; 
    }
    
    document.getElementById("addBusForm").submit();
}
