<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Management System - Home</title>
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
	<form align="right" name="form1" method="post" action="logout.php">
	<label class="logoutLblPos">
	<input name="submit2" type="submit" id="submit2" value="Log Out">
	</label>
	</form>
        <h1>Welcome to the Parking Management System</h1>
        <nav>
            <ul>
                <li><a href="permit.php">Permits</a></li>
                <li><a href="vehicle.php">Vehicles</a></li>
                <li><a href="violations.php">Violations</a></li>
				<li><a href="personal_info.php">Personal Information</a></li>
				<li><a href="drivers.php">Drivers</a></li>
				<li><a href="parking.php">Parking</a></li>
				<li><a href="reports.php">Reports </a></li>
				
				
            </ul>
        </nav>
    </header>

    <section>
        <h2>Manage your parking system efficiently!</h2>
        <p>Use the links above to add, view, update, or delete customer data.</p>
    </section>

    <footer>
        <p>&copy; 2024 Parking Management System</p>
    </footer>
</body>
</html>
