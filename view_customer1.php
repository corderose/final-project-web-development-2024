<?php
include 'db_connect.php';

$stmt = $pdo->query("SELECT * FROM Driver");
$drivers = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
<head><title>View Customers</title></head>
<body>
    <h1>Customer List</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Type</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
        </tr>
        <?php foreach ($drivers as $driver): ?>
        <tr>
            <td><?= $driver['DRIVER_ID'] ?></td>
            <td><?= $driver['Type'] ?></td>
            <td><?= $driver['First'] ?></td>
            <td><?= $driver['Last'] ?></td>
            <td><?= $driver['Address'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
