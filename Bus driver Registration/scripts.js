function editDriver(id) {
    let xhr = new XMLHttpRequest();
    xhr.open('GET', `driver_action.php?id=${id}&action=edit`, true);
    xhr.onload = function() {
        if (this.status === 200) {
            let driver = JSON.parse(this.responseText);
            document.getElementById('driver_id').value = driver.id;
            document.getElementById('name').value = driver.name;
            document.getElementById('address').value = driver.address;
            document.getElementById('phone').value = driver.phone;
        }
    };
    xhr.send();
}

function deleteDriver(id) {
    if (confirm('Are you sure you want to delete this driver?')) {
        let xhr = new XMLHttpRequest();
        xhr.open('GET', `driver_action.php?id=${id}&action=delete`, true);
        xhr.onload = function() {
            if (this.status === 200) {
                window.location.reload();
            }
        };
        xhr.send();
    }
}
