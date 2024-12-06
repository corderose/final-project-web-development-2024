<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $type = $_POST['type'];
    $first = $_POST['first'];
    $last = $_POST['last'];
    $address = $_POST['address'];

    $stmt = $pdo->prepare("UPDATE Driver SET Type = :type, First = :first, Last = :last, Address = :address WHERE DRIVER_ID = :id");
    $stmt->execute([
        'type' => $type,
        'first' => $first,
        'last' => $last,
        'address' => $address,
        'id' => $id
    ]);

    echo "Customer updated successfully!";
}
?>
<!DOCTYPE html>
<html>
<head><title>Update Customer</title></head>
<body>
    <form method="POST">
        ID: <input type="text" name="id" required><br>
        Type: <input type="text" name="type" required><br>
        First Name: <input type="text" name="first" required><br>
        Last Name: <input type="text" name="last" required><br>
        Address: <input type="text" name="address" required><br>
        <button type="submit">Update Customer</button>
    </form>
</body>
</html>
