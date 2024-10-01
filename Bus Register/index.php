<?php
include '../config.php';

include "../Headers-Footers/header.php";
?>

<link rel="stylesheet" href="style.css">

<div class="content">
<br>
<center><h1>Bus Management System</h1></center>

<button class="add-button"><a href="add_bus.php">Add New Bus</a></button>

<center>

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

        while ($bus = $stmt->fetch_assoc()): ?>
        <tr>
            <td><?php echo htmlspecialchars($bus['busID']); ?></td>
            <td><?php echo htmlspecialchars($bus['busNum']); ?></td>
            <td><?php echo htmlspecialchars($bus['busOwner']); ?></td>
            <td><?php echo htmlspecialchars($bus['route']); ?></td>
            <td><?php echo htmlspecialchars($bus['price']); ?></td>
            <td><?php echo htmlspecialchars($bus['seatCount']); ?></td>
            <td><?php echo htmlspecialchars($bus['status']); ?></td>
            <td class="actions">
                <a class="edit-button" href="update_bus.php?id=<?php echo htmlspecialchars($bus['busID']); ?>">Edit</a>
                <a class="delete-button" href="delete_bus.php?id=<?php echo htmlspecialchars($bus['busID']); ?>" onclick="return confirm('Are you sure?');">Delete</a>
            </td>
        </tr>
        
        <?php endwhile; ?>
</table>
</center>
</div>

<?php include "../Headers-Footers/footer.php"; ?>

