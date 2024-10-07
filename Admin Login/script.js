function validateForm() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const errorMessage = document.getElementById('errorMessage');

    //if username and password not set
    if (username === "" || password === "") {
        errorMessage.innerHTML = "Username and Password are required";
        return false;
    }

    //check username is a numeric
    if(!isNaN(username)) {
        errorMessage.innerHTML = "Username cannot be a number";
    }
    
    return true;

}
