
function bookinsSuc()
{
    alert("Seats booked successfully!")
}
document.addEventListener('DOMContentLoaded', () => {
    const seats = document.querySelectorAll('.seat');
    const bookSeatsButton = document.getElementById('bookSeats');

    seats.forEach(seat => {
        seat.addEventListener('click', () => {
            if (!seat.classList.contains('booked')) {
                seat.classList.toggle('selected');
            }
        });
    });

    bookSeatsButton.addEventListener('click', () => {
        const selectedSeats = document.querySelectorAll('.seat.selected');
        const seatNumbers = Array.from(selectedSeats).map(seat => seat.dataset.seat);
        
        fetch('book_seats.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ seats: seatNumbers })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                selectedSeats.forEach(seat => {
                    seat.classList.remove('selected');
                    seat.classList.add('booked');
                });
                alert('Seats booked successfully!');
            } else {
                alert('Failed to book seats.');
            }
        });
    });
});

