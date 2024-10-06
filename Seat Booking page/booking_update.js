document.getElementById('form').addEventListener('submit', function(event){
    //prevent auto submitting
    var from=document.getElementById('from').value;
    var to=document.getElementById('to').value;
    var d_date=document.getElementById('d_date').value;
    var seatnum=document.getElementById('seatnum').value;
    var busid=document.getElementById('busid').value;

    //validate the location 
    if(from.trim()==''){
        document.getElementById('location_error').innerHTML="Location is required";
        document.getElementById('location_error').style="color:red";
        event.preventDefault(); //prevent from submitting the form
        return;
    }
    else{
        document.getElementById('location_error').innerHTML=" ";  //this will replace the error message with white space
    }
    //validate destination
    if(to.trim()==''){
        document.getElementById('destination_error').innerHTML="Destination is required";
        document.getElementById('destination_error').style="color:red";
        event.preventDefault();
        return;
    }
    else{
        document.getElementById('location_error').innerHTML=" ";
    }
    //validate departure_date
    if(d_date.trim()==''){
        document.getElementById('d_date_error').innerHTML="Departure date is required";
        document.getElementById('d_date_error').style="color:red";
        event.preventDefault();
        return;
    }
    else{
        document.getElementById('location_error').innerHTML=" ";
    }
    //validate seatnum
    if(seatnum.trim()==''){
        document.getElementById('seatnum_error').innerHTML="Seat_No is required";
        document.getElementById('seatnum_error').style="color:red";
        event.preventDefault();
        return;
    }
    else{
        document.getElementById('location_error').innerHTML=" ";
    }
    //validate busid
    if(busid.trim()==''){
        document.getElementById('busid_error').innerHTML="Bus_id is required";
        document.getElementById('seatnum_error').style="color:red";
        event.preventDefault();
        return;
    }
    else{
        document.getElementById('location_error').innerHTML=" ";
    }
})