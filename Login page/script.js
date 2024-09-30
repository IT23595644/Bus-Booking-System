function validateForm() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const errorMessage = document.getElementById('errorMessage');

    if (username === "" || password === "") {
        errorMessage.innerHTML = "Username and Password are required";
        return false;
    }

    return true;

}

function invalidPassword() {
    alert("Invalid Password");
}

function invalidUsername() {
    document.getElementById('errorMessage').innerHTML = "Invalid Username";
}
