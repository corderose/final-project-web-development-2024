<?php
include 'db_connect.php'; // Include database connection
include 'checksession.php'; // Ensure user is logged in

try {
    // Fetch all parking lots from the database
    $stmt = $pdo->query("SELECT * FROM Parking_Lots"); // Replace with your table name if different
    $parking_lots = $stmt->fetchAll(); // Fetch all rows
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
    <title>Parking Lots and Spaces</title>
    <style>
        table {
            width: 70%;
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
    <h1 style="text-align:center;">Parking Lots and Spaces</h1>
    <table>
        <thead>
            <tr>
                <th>Lot ID</th>
                <th>Lot Name</th>
                <th>Total Spaces</th>
                <th>Available Spaces</th>
                <!-- Add more columns as necessary -->
            </tr>
        </thead>
        <tbody>
            <?php if ($parking_lots): ?>
                <?php foreach ($parking_lots as $lot): ?>
                    <tr>
                        <td><?= htmlspecialchars($lot['lot_id']) ?></td>
                        <td><?= htmlspecialchars($lot['lot_name']) ?></td>
                        <td><?= htmlspecialchars($lot['total_spaces']) ?></td>
                        <td><?= htmlspecialchars($lot['available_spaces']) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" style="text-align:center;">No parking lots found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
