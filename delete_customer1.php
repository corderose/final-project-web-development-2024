<?php
include 'db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $pdo->prepare("DELETE FROM Driver WHERE DRIVER_ID = :id");
    $stmt->execute(['id' => $id]);

    echo "Customer deleted successfully!";
}
?>
<!DOCTYPE html>
<html>
<head><title>Delete Customer</title></head>
<body>
    <form method="GET">
        Customer ID: <input type="text" name="id" required><br>
        <button type="submit">Delete Customer</button>
    </form>
</body>
</html>
