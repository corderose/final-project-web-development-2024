<?php
include 'db_connect.php'; // Include database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['driver_id'])) {
    echo "<h2>Debugging Form Data</h2>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // Retrieve form inputs
    $driver_id = $_POST['driver_id'] ?? null;
    $vehicle_id = $_POST['vehicle_id'] ?? null;
    $permit_type = $_POST['permit_type'] ?? null;
    $cost = $_POST['cost'] ?? null;

    // Validate inputs
    if (!$driver_id || !$vehicle_id || !$permit_type || !$cost) {
        echo "Error: All fields are required!";
    } else {
        try {
            // Insert into Permit table
            $stmt = $pdo->prepare(
                "INSERT INTO Permit (Permit_Type, DRIVER_ID, VEHICLE_ID, Cost, Purchase_Date, Expiry_Date)
                VALUES (:permit_type, :driver_id, :vehicle_id, :cost, CURDATE(), DATE_ADD(CURDATE(), INTERVAL 1 YEAR))"
            );
            $stmt->execute([
                'permit_type' => $permit_type,
                'driver_id' => $driver_id,
                'vehicle_id' => $vehicle_id,
                'cost' => $cost
            ]);
            echo "Permit purchased successfully!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>
<html>
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

	<head>
	<title> Buy Permit  </title>
	</head>
	<body>
	
	</body>
	

<header>
<form align="right" name="form1" method="post" action="home_page.php">
  <label class="logoutLblPos">
  <input name="submit2" type="submit" id="submit2" value="Home Page">
  </label>
</form>
<form align="right" name="form1" method="post" action="logout.php">
  <label class="logoutLblPos">
  <input name="submit2" type="submit" id="submit2" value="Log Out">
  </label>
</form>	
	<header>
		<h1> Buy Permit </h1>
	</header>
</header>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Permit</title>
</head>
<body>
    <h1>Buy Permit</h1>
    <form method="POST" action="buy_permit.php">
        Driver ID: <input type="text" name="driver_id" required><br>
        Vehicle ID: <input type="text" name="vehicle_id" required><br>
        Permit Type: <input type="text" name="permit_type" required><br>
        Cost: <input type="text" name="cost" required><br>
        <button type="submit">Buy Permit</button>
    </form>
</body>

</html>

