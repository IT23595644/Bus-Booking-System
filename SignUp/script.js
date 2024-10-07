function validateForm(event) {
    var fName = document.getElementById("first_name").value;
    var lName = document.getElementById("last_name").value;
    var pass = document.getElementById("password").value;
    var repass = document.getElementById("confirm_password").value;

    if (pass !== repass) {
        alert('Passwords do not match!');
        event.preventDefault();
    }

    else if (fName.trim() === "") {

        alert('First Name cannot be empty!');
        event.preventDefault();

    } 
    
    else if (lName.trim() === "") {

        alert('Last Name cannot be empty!');
        event.preventDefault();

    } 
    
    else if (!isNaN(fName.trim()) || !isNaN(lName.trim())) {

        alert('Name cannot be a number');
        event.preventDefault();

    } 
    
    else {

        return true;

    }
    
}
