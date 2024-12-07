<?php
require_once 'db_connect.php';

try {
    $stmt = $pdo->query("
        SELECT 
            Violation.VIOLATION_ID, 
            Violation_Type.Violation_Name, 
            Violation_Type.Penalty_Amount, 
            Violation.Datetime, 
            Violation.PAYMENT_ID
        FROM 
            Violation
        JOIN 
            Violation_Type 
        ON 
            Violation.VIOLATION_TYPE_ID = Violation_Type.VIOLATION_TYPE_ID
    ");

    $violations = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
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

  <title> Reports </title>
<h1> Reports </h1>
</header>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <h1> Reports </h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Type</th>
            <th>Penalty</th>
            <th>Date & Time</th>
            <th>Payment ID</th>
        </tr>
        <?php foreach ($violations as $violation): ?>
            <tr>
                <td><?php echo htmlspecialchars($violation['VIOLATION_ID']); ?></td>
                <td><?php echo htmlspecialchars($violation['Violation_Name']); ?></td>
                <td><?php echo htmlspecialchars($violation['Penalty_Amount']); ?></td>
                <td><?php echo htmlspecialchars($violation['Datetime']); ?></td>
                <td><?php echo htmlspecialchars($violation['PAYMENT_ID']); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
