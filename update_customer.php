<?php
$customer = ["id" => $_GET['id'], "first_name" => "John", "last_name" => "Doe", "email" => "john@example.com"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];

    echo "<h3>Customer updated successfully:</h3>";
    echo "First Name: $first_name<br>";
    echo "Last Name: $last_name<br>";
    echo "Email: $email<br>";
} else {
    $first_name = $customer['first_name'];
    $last_name = $customer['last_name'];
    $email = $customer['email'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Customer</title>
</head>
<body>
    <header>
        <h1>Update Customer</h1>
    </header>

    <section>
        <form action="update_customer.php?id=<?php echo $customer['id']; ?>" method="post">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" value="<?php echo $first_name; ?>" required>
            <br>
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" value="<?php echo $last_name; ?>" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
            <br>
            <input type="submit" value="Update Customer">
        </form>
    </section>
</body>
</html>
