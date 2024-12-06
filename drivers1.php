<?php
include 'db_connect.php'; // Include database connection
include 'checksession.php'; // Ensure user is logged in

try {
    // Fetch all drivers from the database
    $stmt = $pdo->query("SELECT * FROM Drivers"); // Replace 'Drivers' with your actual table name if different
    $drivers = $stmt->fetchAll(); // Fetch all rows
} catch (PDOException $e) {
    // Handle database errors
    echo "Error: " . $e->getMessage();
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drivers</title>
    <style>
        table {
            width: 50%;
            margin: auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Drivers</h1>
    <table>
        <thead>
            <tr>
                <th>Driver ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <!-- Add more columns as needed -->
            </tr>
        </thead>
        <tbody>
            <?php if ($drivers): ?>
                <?php foreach ($drivers as $driver): ?>
                    <tr>
                        <td><?= htmlspecialchars($driver['driver_id']) ?></td>
                        <td><?= htmlspecialchars($driver['name']) ?></td>
                        <td><?= htmlspecialchars($driver['email'] ?? 'N/A') ?></td>
                        <td><?= htmlspecialchars($driver['phone'] ?? 'N/A') ?></td>
                        <!-- Add more fields as necessary -->
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" style="text-align:center;">No drivers found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>

