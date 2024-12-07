<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
	<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #dc143c;
            color: white;
            padding: 10px;
            text-align: center;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin: 0 15px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        section {
            padding: 20px;
            text-align: center;
        }
        footer {
            background-color: #dc143c;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
			
			
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to the Parking Management System</h1>
    </header>
    
    <section>
		<h2>Manage your parking system efficiently!</h2>
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

