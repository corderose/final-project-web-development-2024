<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <header>
        <h1>Welcome to the Parking Management System</h1>
    </header>
    
    <section>
        <h2>Login</h2>
        <?php if (isset($_GET['error'])): ?>
            <p style="color: red;">Invalid username or password!</p>
        <?php endif; ?>
        <form action="authenticate.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <input type="submit" value="Login">
        </form>
        <button onclick="location.href='create_account.php'">Create Account</button>
    </section>

    <footer>
        <p>© 2024 Parking Management System. All Rights Reserved.</p>
    </footer>
</body>
</html>

