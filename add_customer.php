<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
</head>
<body>
    <header>
        <h1>Add New Customer</h1>
    </header>

    <section>
        <form action="add_customer.php" method="post">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>
            <br>
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <input type="submit" value="Add Customer">
        </form>
    </section>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h3>New customer added successfully:</h3>";
        echo "First Name: " . $_POST['first_name'] . "<br>";
        echo "Last Name: " . $_POST['last_name'] . "<br>";
        echo "Email: " . $_POST['email'] . "<br>";
    }
    ?>

</body>
</html>

