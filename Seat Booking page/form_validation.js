document.getElementById('form').addEventListener('submit', function(event){
    //prevent auto submitting
    var from=document.getElementById('from').value;
    var to=document.getElementById('to').value;
    var d_date=document.getElementById('d_date').value;
    var seatnum=document.getElementById('seatnum').value;
    var busid=document.getElementById('busid').value;


    if(from.trim()=='' && to.trim()=='' && d_date.trim()=='' && seatnum.trim()=='' && busid.trim()=='' ){
        document.getElementById('location_error').innerHTML="Location is required";
        document.getElementById('destination_error').innerHTML="Destination is required";
        document.getElementById('d_date_error').innerHTML="Departure date is required";
        document.getElementById('seatnum_error').innerHTML="Seat_No is required";
        document.getElementById('busid_error').innerHTML="Bus_id is required";
    }
    else{
        //validate the location 
        if(from.trim()==''){
            document.getElementById('location_error').style="color:red";
            document.getElementById('location_error').innerHTML="Location is required";
            event.preventDefault(); //prevent from submitting the form
            return;
        }
    
        
        if(to.trim()==''){  //validate destination
            document.getElementById('destination_error').style="color:red";
            document.getElementById('destination_error').innerHTML="Destination is required";
            event.preventDefault();
            return;
        }
        
        
        if(d_date.trim()==''){  //validate departure_date
            document.getElementById('d_date_error').style="color:red";
            document.getElementById('d_date_error').innerHTML="Departure date is required";
            event.preventDefault();
            return;
        }
        
        
        if(seatnum.trim()==''){  //validate seatnum
            document.getElementById('seatnum_error').style="color:red";
            document.getElementById('seatnum_error').innerHTML="Seat_No is required";
            event.preventDefault();
            return;
        }
        
        
        if(busid.trim()==''){  //validate busid
            document.getElementById('busid_error').style="color:red";
            document.getElementById('busid_error').innerHTML="Bus_id is required";
            event.preventDefault();
            return;
         }
    }

})