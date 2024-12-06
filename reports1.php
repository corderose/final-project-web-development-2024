<?php
require_once 'db_connect.php';

try {
    $stmt = $pdo->query("
        SELECT 
            Violation.VIOLATION_ID, 
            Violation_Type.Violation_Name, 
            Violation_Type.Penalty_Amount, 
            Violation.Datetime, 
            Violation.PAYMENT_ID
        FROM 
            Violation
        JOIN 
            Violation_Type 
        ON 
            Violation.VIOLATION_TYPE_ID = Violation_Type.VIOLATION_TYPE_ID
    ");

    $violations = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Violations Report</title>
</head>
<body>
    <h1>Violations Report</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Type</th>
            <th>Penalty</th>
            <th>Date & Time</th>
            <th>Payment ID</th>
        </tr>
        <?php foreach ($violations as $violation): ?>
            <tr>
                <td><?php echo htmlspecialchars($violation['VIOLATION_ID']); ?></td>
                <td><?php echo htmlspecialchars($violation['Violation_Name']); ?></td>
                <td><?php echo htmlspecialchars($violation['Penalty_Amount']); ?></td>
                <td><?php echo htmlspecialchars($violation['Datetime']); ?></td>
                <td><?php echo htmlspecialchars($violation['PAYMENT_ID']); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
