<?php
include '../config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bus Management System</title>
</head>
<body>

<h1>Bus Management System</h1>

<button class="add-button"><a href="add_bus.php">Add New Bus</a></button>

<table>
        <tr>
            <th>ID</th>
            <th>Number</th>
            <th>Owner</th>
            <th>Route</th>
            <th>Price(LKR)</th>
            <th>Capacity</th>
            <th>Status</th>
            <th class="actions">Actions</th>
        </tr>
        <?php 
        
        $stmt = $conn->query("SELECT * FROM bus");
        $buses = $stmt->fetch_ASSOC();
        
        foreach ($buses as $bus): ?>
        <tr>
            <td><?php echo $buses['busID']; ?></td>
            <td><?php echo $buses['busNum']; ?></td>
            <td><?php echo $buses['busOwner']; ?></td>
            <td><?php echo $buses['route']; ?></td>
            <td><?php echo $buses['price']; ?></td>
            <td><?php echo $buses['seatCount']; ?></td>
            <td><?php echo $buses['status']; ?></td>
            <td class="actions">
                <button id="edit-button"><a href="update_bus.php?id=<?php echo $bus['id']; ?>">Edit</a></button>
                <button id="delete-button"><a href="delete_bus.php?id=<?php echo $bus['id']; ?>" onclick="return confirm('Are you sure?');">Delete</a></button>
            </td>
        </tr>
        <?php endforeach; ?>
</table>

</body>
</html>
