<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $type = $_POST['type'];
    $first = $_POST['first'];
    $last = $_POST['last'];
    $address = $_POST['address'];

    $stmt = $pdo->prepare("INSERT INTO Driver (Type, First, Last, Address) VALUES (:type, :first, :last, :address)");
    $stmt->execute([
        'type' => $type,
        'first' => $first,
        'last' => $last,
        'address' => $address
    ]);

    echo "Customer added successfully!";
}
?>
<!DOCTYPE html>
<html>
<head><title>Add Customer</title></head>
<body>
    <form method="POST">
        Type: <input type="text" name="type" required><br>
        First Name: <input type="text" name="first" required><br>
        Last Name: <input type="text" name="last" required><br>
        Address: <input type="text" name="address" required><br>
        <button type="submit">Add Customer</button>
    </form>
</body>
</html>
