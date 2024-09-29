<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Management</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="container">
        <h1>Bus Driver Details</h1>
            <button class='adict'><a href="add_bus_drive.php">Add New Bus Driver</a></button>
        <form id="driver-form" method="POST" action="driver_action.php">
            <input type="hidden" name="id" id="driver_id">
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="address">Address:</label>
                <textarea id="address" name="address"></textarea>
            </div>
            <div>
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone">
            </div>
            <div>
                <button type="submit" name="save_driver">Save Driver</button>
            </div>
        </form>

        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="driver-list">
            <?php
                include 'db_connect.php';

        
                $stmt = $conn->prepare("SELECT * FROM drivers");
                $stmt->execute();
                $result = $stmt->get_result(); 


                while ($driver = $result->fetch_assoc()) {
                    $address = isset($driver['Address']) ? $driver['Address'] : '';

                    echo "<tr>
                            <td>{$driver['id']}</td>
                            <td>{$driver['name']}</td>
                            <td>{$address}</td>
                            <td>{$driver['phone']}</td>
                            <td>
                                <button class='edit-btn' onclick='editDriver({$driver['id']})'>Edit</button>
                                <button class='delete-btn' onclick='deleteDriver({$driver['id']})'>Delete</button>
                            </td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="scripts.js"></script>
</body>
</html>
