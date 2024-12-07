<?php
include 'db_connect.php';

// Fetch violations with corresponding violation type details
$stmt = $pdo->query(
    "SELECT 
        v.VIOLATION_ID, 
        vt.Violation_Name, 
        v.Datetime, 
        vt.Penalty_Amount 
     FROM 
        Violation v 
     JOIN 
        Violation_Type vt 
     ON 
        v.VIOLATION_TYPE_ID = vt.VIOLATION_TYPE_ID"
);
$violations = $stmt->fetchAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $violation_id = $_POST['violation_id'] ?? null;
    $new_violation_type_id = $_POST['violation_type_id'] ?? null;

    if ($violation_id && $new_violation_type_id) {
        $stmt = $pdo->prepare("UPDATE Violation SET VIOLATION_TYPE_ID = :violation_type_id WHERE VIOLATION_ID = :violation_id");
        $stmt->execute([
            'violation_id' => $violation_id,
            'violation_type_id' => $new_violation_type_id,
        ]);
        echo "Violation updated successfully!";
    } else {
        echo "Error: All fields are required!";
    }
}
?>

<!DOCTYPE html>
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
    <title>Violations</title>
	<h1>Violations</h1>
</header>
</header>
<body>
    <h1>Violations</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Type</th>
            <th>Date & Time</th>
            <th>Penalty Amount</th>
        </tr>
        <?php foreach ($violations as $violation): ?>
        <tr>
            <td><?= htmlspecialchars($violation['VIOLATION_ID']) ?></td>
            <td><?= htmlspecialchars($violation['Violation_Name']) ?></td>
            <td><?= htmlspecialchars($violation['Datetime']) ?></td>
            <td><?= htmlspecialchars($violation['Penalty_Amount']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h3>Update Violation</h3>
    <form method="POST">
        ID: <input type="number" name="violation_id" required><br>
        New Violation Type ID: <input type="number" name="violation_type_id" required><br>
        <button type="submit">Update</button>
    </form>

</body>
</html>
