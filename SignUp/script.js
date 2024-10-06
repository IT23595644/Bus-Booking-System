function validateForm() {
    var fName = document.getElementById("first_name").value;
    var lName = document.getElementById("last_name").value;
    var error = document.getElementById("error");

    if (!isNaN(fName) || !isNaN(lName)) {
        error.innerHTML = "Name cannot be a number";
        return false;
    } else {
        return true;
    }
}
