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
