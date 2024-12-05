<?php
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    echo "Customer with ID $id has been deleted (not really, just simulated).";
} else {
    echo "No customer ID provided.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Customer</title>
</head>
<body>
    <h1>Delete Customer</h1>
    <p>Use the link from view_customers.php to delete a customer.</p>
</body>
</html>
