<?php
include 'db.php';

// Fetch all buses
$stmt = $pdo->query("SELECT * FROM buses");
$buses = $stmt->fetchAll();
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
            <th>Name</th>
            <th>Route</th>
            <th>Capacity</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($buses as $bus): ?>
        <tr>
            <td><?php echo $bus['id']; ?></td>
            <td><?php echo $bus['name']; ?></td>
            <td><?php echo $bus['route']; ?></td>
            <td><?php echo $bus['capacity']; ?></td>
            <td>
                <button id="edit-button"><a href="update_bus.php?id=<?php echo $bus['id']; ?>">Edit</a></button>
                <button id="delete-button"><a href="delete_bus.php?id=<?php echo $bus['id']; ?>" onclick="return confirm('Are you sure?');">Delete</a></button>
            </td>
        </tr>
        <?php endforeach; ?>
</table>

</body>
</html>
