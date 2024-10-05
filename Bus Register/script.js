function AddBus(){

    var priceValue = document.getElementById("price").value;
    var seatCount = document.getElementById("seatCount").value;

    if(priceValue<0){
        alert("Please enter valid value for Price!");
    }

    if(seatCount<0 || seatCount>100){
        alert("Please enter valid value for seatCount!");
    }



    alert("Bus Details Added Successfully!");

}