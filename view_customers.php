<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Customers</title>
</head>
<body>
    <header>
        <h1>Customer List</h1>
    </header>

    <section>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>

            <?php
$customers = [
    ["id" => 1, "first_name" => "John", "last_name" => "Doe", "email" => "john@example.com"],
    ["id" => 2, "first_name" => "Jane", "last_name" => "Smith", "email" => "jane@example.com"],
];

foreach ($customers as $customer) {
    echo "<tr>
            <td>{$customer['first_name']}</td>
            <td>{$customer['last_name']}</td>
            <td>{$customer['email']}</td>
            <td>
                <a href='delete_customer.php?id={$customer['id']}'>Delete</a>
            </td>
          </tr>";
}
?>

        </table>
    </section>
</body>
</html>

