document.getElementById('form').addEventListener('submit', function(event){
        //prevent auto submitting

    var firstname=document.getElementById('f_name').value;
    var lastname=document.getElementById('l_name').value;
    var address=document.getElementById('address').value;
    var pnum=document.getElementById('p_num').value;
    var dob=document.getElementById('dob').value;

    const phonePattern = /^[0-9]{10}$/; //to check phonepattern
    //validate first name
    if(firstname.trim()=='')
    {
        document.getElementById('name_error1').style='color:#ff0000';
        document.getElementById('name_error1').innerHTML="First Name is required";
        event.preventDefault();
        return;
    }
    else{
        document.getElementById('name_error1').style='color:rgb(0, 255, 51);';
        document.getElementById('name_error1').innerHTML="Checked✅";
        
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
        document.getElementById('dob_error').style.color = '#ff0000'; // Set error color
        document.getElementById('dob_error').innerHTML = "Date is required"; // Set error message
        event.preventDefault(); // Prevent form submission
        return;
    } else {
        document.getElementById('dob_error').style.color = 'rgb(0, 255, 51)'; // Set success color
        document.getElementById('dob_error').innerHTML = "Checked✅"; // Set success message
    }
    return;
})


/*function validatefName(){
    var fname=document.getElementById('f_name').value;

    if(fname.length==0)
    {
        document.getElementById('name_error1').style='color:red';
        document.getElementById('name_error1').innerHTML="Name is required";
        return;
    }
    if(!fname.match( /^[A-Za-z]+$/))
    {
        document.getElementById('name_error1').style='color:red';
        document.getElementById('name_error1').innerHTML="Only contain alphabetic characters";
        return;
    }
    else
    {
        document.getElementById('name_error1').style='color:seagreen';
        document.getElementById('name_error1').innerHTML='Valid Name';
        return;
    }
    

}
function validatelName(){
    var lname=document.getElementById('l_name').value;

    if(lname.length>3)
    {
        document.getElementById('name_error2').style='color:red';
        document.getElementById('name_error2').innerHTML="Name is required";
    }
    if(!lname.match( /^[A-Za-z]+$/))
    {
        document.getElementById('name_error2').style='color:red';
        document.getElementById('name_error2').innerHTML="Only contain alphabetic characters";
    }
    else
    {
        document.getElementById('name_error2').style='color:seagreen';
        document.getElementById('name_error2').innerHTML='Valid Name';
    }
}


document.getElementById('bookingForm').addEventListener('submit', function(event) {
    // Get form elements
    const fullName = document.getElementById('name');
    const email = document.getElementById('email');
    const phone = document.getElementById('phone');
    const address = document.getElementById('address');
    const travelers = document.getElementById('travelers');
    const travelDate = document.getElementById('date');
    const tourPlan = document.getElementById('tour-plan');
    
    // Regular expressions for validation
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const phonePattern = /^[0-9]{10}$/; // Validates a 10-digit phone number
    
    // Validate Full Name
    if (fullName.value.trim() === '') {
        showPopup('Full Name is required.');
        event.preventDefault();
        return;
    }

    // Validate Email
    if (!emailPattern.test(email.value.trim())) {
        showPopup('Please enter a valid email address.');
        event.preventDefault();
        return;
    }

    // Validate Phone Number
    if (!phonePattern.test(phone.value.trim())) {
        showPopup('Please enter a valid 10-digit phone number.');
        event.preventDefault();
        return;
    }

    // Validate Address
    if (address.value.trim() === '') {
        showPopup('Address is required.');
        event.preventDefault();
        return;
    }

    // Validate Number of Travelers
    if (travelers.value.trim() === '' || travelers.value <= 0) {
        showPopup('Please enter a valid number of travelers.');
        event.preventDefault();
        return;
    }

    // Validate Travel Date
    if (travelDate.value.trim() === '') {
        showPopup('Please select a valid travel date.');
        event.preventDefault();
        return;
    }

    // Validate Tour Plan Selection
    if (tourPlan.value === '') {
        showPopup('Please select a tour plan.');
        event.preventDefault();
        return;
    }
});

// Function to show the popup with the error message
function showPopup(message) {
    const popup = document.getElementById('popup');
    const popupMessage = document.getElementById('popup-message');
    
    popupMessage.textContent = message;
    popup.style.display = 'flex';  // Show the popup
}

// Close the popup when clicking the close button or the "OK" button
document.getElementById('close-popup').addEventListener('click', function() {
    closePopup();
});

document.getElementById('popup-ok').addEventListener('click', function() {
    closePopup();
});

function closePopup() {
    const popup = document.getElementById('popup');
    popup.style.display = 'none';  // Hide the popup
}
*/