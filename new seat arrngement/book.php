<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "bus_system");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle seat booking actions
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $action = $_POST['action'];
    $selectedSeats = $_POST['selectedSeats'] ?? [];
    $seatId = $_POST['seatId'] ?? '';

    if ($action === 'book') {
        // Book the seats (Create Operation)
        foreach ($selectedSeats as $seat) {
            // Check if seat is already booked
            $sqlCheck = "SELECT seat_number FROM bookings WHERE seat_number='$seat'";
            $result = $conn->query($sqlCheck);

            if ($result->num_rows == 0) {
                $sql = "INSERT INTO bookings (seat_number) VALUES ('$seat')";
                $conn->query($sql);
            }
        }
    } elseif ($action === 'cancel') {
        // Cancel the selected seats (Delete Operation)
        foreach ($selectedSeats as $seat) {
            $sql = "DELETE FROM bookings WHERE seat_number='$seat'";
            $conn->query($sql);
        }
    } elseif ($action === 'remove') {
        // Remove a specific booking (Delete Operation)
        $sql = "DELETE FROM bookings WHERE id='$seatId'";
        $conn->query($sql);
    } elseif ($action === 'update') {
        // Update seat booking (Edit Operation)
        $newSeat = $_POST['newSeat'];
        $sql = "UPDATE bookings SET seat_number='$newSeat' WHERE id='$seatId'";
        $conn->query($sql);
    }

    // Refresh the page to reflect changes
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Fetch all booked seats from the database
$bookedSeats = [];
$sql = "SELECT id, seat_number FROM bookings";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $bookedSeats[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Seat Arrangement with Update/Remove</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css"> <!-- Link the external CSS file -->
</head>
<body>
    <div class="container">
        <h1>Bus Seat Arrangement</h1>
        <form id="seatForm" method="POST">
            <input type="hidden" name="action" id="action">
            <div class="bus">
                <!-- Bus seat layout -->
                <div class="row">
                    <div class="space"></div>
                    <div class="space"></div>
                    <div class="space"></div>
                    <div class="space"></div>
                    <div class="space"></div>
                    <div><i class="ri-steering-2-line"></i></div>
                </div>
                <?php
                $rows = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K'];
                foreach ($rows as $row) {
                    echo '<div class="row">';
                    for ($i = 1; $i <= 5; $i++) {
                        $seatNumber = $row . $i;
                        $class = in_array($seatNumber, array_column($bookedSeats, 'seat_number')) ? 'seat booked' : 'seat';
                        echo "<div class=\"$class\" data-seat=\"$seatNumber\">$seatNumber</div>";
                    }
                    echo '</div>';
                }
                ?>
            </div>
            <input type="hidden" name="selectedSeats[]" id="selectedSeatsInput">
            <button type="button" onclick="bookSeats()">Book Selected Seats</button>
            <button type="button" onclick="cancelSeats()">Cancel Selected Seats</button>
        </form>

        <!-- Booked Seats Table -->
        <div class="booked-seats">
            <h2>Your Booked Seats</h2>
            <table>
                <thead>
                    <tr>
                        <th>Seat Number</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($bookedSeats as $seat) {
                        echo "<tr>
                            <td>{$seat['seat_number']}</td>
                            <td>
                                <form method='POST' class='action-form'>
                                    <input type='hidden' name='seatId' value='{$seat['id']}'>
                                    <input type='text' name='newSeat' placeholder='New Seat' required>
                                    <button type='submit' name='action' value='update'>Update</button>
                                    <button type='submit' name='action' value='remove'>Remove</button>
                                </form>
                            </td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="book-detail">
            <h3>Selected Seat</h3><div class="seat"><i class="ri-sofa-line" style="color:gold"></i></div>
            <h3>Available Seat</h3><div class="seat"><i class="ri-sofa-line" style="color:greenyellow"></i></div>
            <h3>Booked Seat</h3><div class="seat"><i class="ri-sofa-line" style="color:red"></i></div>
        </div>
    </div>

    <script>
        const seats = document.querySelectorAll('.seat:not(.booked)');
        const selectedSeatsInput = document.getElementById('selectedSeatsInput');
        let selectedSeats = [];

        seats.forEach(seat => {
            seat.addEventListener('click', () => {
                const seatNumber = seat.dataset.seat;
                if (selectedSeats.includes(seatNumber)) {
                    selectedSeats = selectedSeats.filter(s => s !== seatNumber);
                    seat.classList.remove('selected');
                } else {
                    selectedSeats.push(seatNumber);
                    seat.classList.add('selected');
                }
                selectedSeatsInput.value = JSON.stringify(selectedSeats);
            });
        });

        function bookSeats() {
            document.getElementById('action').value = 'book';
            document.getElementById('seatForm').submit();
        }

        function cancelSeats() {
            document.getElementById('action').value = 'cancel';
            document.getElementById('seatForm').submit();
        }
    </script>
</body>
</html>
