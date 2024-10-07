document.getElementById('form').addEventListener('submit', function(event){

    var firstname=document.getElementById('f_name').value;
    var lastname=document.getElementById('l_name').value;
    var address=document.getElementById('address').value;
    var pnum=document.getElementById('p_num').value;
    var dob=document.getElementById('dob').value;

    const phonePattern = /^[0-9]{10}$/; //to check phonepattern
    //validate first name
    if(firstname.trim()=='')
    {
        document.getElementById('name_error1').style='color:#ff0000';                 // Set error color
        document.getElementById('name_error1').innerHTML="First Name is required";   // Set error message
        event.preventDefault();                                                      // Prevent form submission
        return;
    }
    else{
        document.getElementById('name_error1').style='color:rgb(0, 255, 51);';   // Set success color
        document.getElementById('name_error1').innerHTML="Checked✅";           // Set success message
        
    }
    //validate last name
    if(lastname.trim()=='')
    {
        document.getElementById('name_error2').style='color:#ff0000';    
        document.getElementById('name_error2').innerHTML="Last Name is required";
        event.preventDefault();
        return;
    }
    else
    {
        document.getElementById('name_error2').style='color:rgb(0, 255, 51);';
        document.getElementById('name_error2').innerHTML="Checked✅";
    }
    //validate address 
    if(address.trim()=='')
    {
        document.getElementById('address_error').style='color:#ff0000';
        document.getElementById('address_error').innerHTML="Address is required";
        event.preventDefault();
        return;
    }
    else
    {   
        document.getElementById('address_error').style='color:rgb(0, 255, 51);';
        document.getElementById('address_error').innerHTML="Checked✅";
    }
    //validate Phone Number
    if(pnum.trim()=='')
    {
        document.getElementById('num_error').style='color:#ff0000';
        document.getElementById('num_error').innerHTML="Phone number is required";
        event.preventDefault();
        return;
    }
    else if(phonePattern.test(pnum.trim()))
    {   
        document.getElementById('num_error').style='color:rgb(0, 255, 51);';
        document.getElementById('num_error').innerHTML="Checked✅";
    }
    else
    {   
        document.getElementById('num_error').style='color:#ff0000';
        document.getElementById('num_error').innerHTML="Phone number with 10 digits only";
        event.preventDefault();
    }
    
 // Validate Date of Birth
    if (dob == '') {
        document.getElementById('dob_error').style.color = '#ff0000'; 
        document.getElementById('dob_error').innerHTML = "Date is required"; 
        event.preventDefault(); 
        return;
    } else {
        document.getElementById('dob_error').style.color = 'rgb(0, 255, 51)'; 
        document.getElementById('dob_error').innerHTML = "Checked✅"; 
    }
    return;
})


