function AddBus(event) {
    event.preventDefault();

    var priceValue = parseFloat(document.getElementById("price").value);
    var seatCount = parseInt(document.getElementById("seatCount").value);
    var time = parseFloat(document.getElementById("time").value);
    var BNum = document.getElementById("busNum").value;

    const pattern = /^[a-zA-Z]{2}-\d{4}$/; 

    // Check if bus number matches the pattern
    if (!pattern.test(BNum)) {
        alert("Bus number should be like ##-1234 (ex-LG-1234)");
        return;
    }

    // Check if the numeric values are valid numbers
    if (isNaN(priceValue) || isNaN(seatCount) || isNaN(time)) {
        alert("Price, Seat Count, and Time must be numbers!");
        return; 
    }

    // Validate price
    if (priceValue < 0) {
        alert("Please enter a valid value for Price!");
        return; 
    }

    // Validate seat count
    if (seatCount < 0 || seatCount > 100) {
        alert("Please enter a valid value (0-100) for Seat Count!");
        return; 
    }

    // Validate time (assuming 0-23 for hours)
    if (time < 0 || time >= 24) {
        alert("Please enter a valid value (0-23) for Time!");
        return; 
    }
    
    alert("Bus details successfully added✅");
    document.getElementById("addBusForm").submit();
}
