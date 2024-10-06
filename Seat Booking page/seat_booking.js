function validateForm() {
    let from = document.forms["booking_form"]["from"].value;
    let to = document.forms["booking_form"]["to"].value;
    let seatNo = document.forms["booking_form"]["seat_no"].value;
    let busId = document.forms["booking_form"]["bus_id"].value;

    if (from === "" || to === "" || seatNo === "" || busId === "") {
        alert("All fields must be filled out");
        return false; // Prevent form submission
    }
    return true; // Allow form submission if validation passes
}
