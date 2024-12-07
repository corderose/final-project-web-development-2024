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

  <title> Reports </title>

</header>

<body>
  <header>
  <h1> Reports </h1>
  </header>
  
<form method="POST" action="">
	<label for="report_type">Choose Report Type:</label>
		<select name="report_type" id="report_type">
			<option value="">Select a report</option>
			<option value="1" <?php echo (isset($_POST['report_type']) && $_POST['report_type'] == '1') ? 'selected' : '';?>> 				Penalties
			</option>
			<option value="2" <?php echo (isset($_POST['report_type']) && $_POST['report_type'] == '2') ? 'selected' : '';?>> 
				Permits
			</option>
		</select>
	<button type="submit">Generate</button>
	<button type="submit" name="reset" value="true">Clear</button>
</form>

</html>


<?php

$page_roles = array('admin');

require_once 'login.php';
//require_once 'checksession.php';

// Clear the report selection
if (isset($_POST['reset']) && $_POST['reset'] == 'true') {
            unset($_POST['report_type']); 
}

//connection when report is selected
if (isset($_POST['report_type'])) {
	$conn = new mysqli($hn, $un, $pw, $db);
	if($conn->connect_error) die($conn->connect_error);

//Report 1
if ($_POST['report_type'] == '1') {
$query1 = "
	SELECT 
	    D.First_name,
	    D.Last_name,
	    D.Email,
	    VT.Penalty_Amount
	FROM 
	    Driver D
	JOIN 
	    Vehicle V ON D.DRIVER_ID = V.DRIVER_ID
	JOIN 
	    Permit P ON V.VEHICLE_ID = P.VEHICLE_ID
	JOIN 
	    Payment Pmt ON P.PAYMENT_ID = Pmt.PAYMENT_ID
	JOIN
		Violation Vi ON Pmt.PAYMENT_ID = Vi.PAYMENT_ID
	JOIN 
	    Violation_Type VT ON Vi.VIOLATION_TYPE_ID = VT.VIOLATION_TYPE_ID;
";

$result1 = $conn->query($query1);
if(!$result1) die($conn->error);

if ($result1->num_rows > 0) {    
    // Fetch each row of data and display it
    while($row = $result1->fetch_array(MYSQLI_ASSOC)){	
	 echo <<<_END
			<pre>
				First: $row[First_name]
				Last: $row[Last_name]
				Email: $row[Email]
				Penalty Amount: $row[Penalty_Amount]
			</pre>

	_END;
	
		}
	}else{
		echo "No data found <br>";
	}
$result1->close();

//Report 2
} elseif ($_POST['report_type'] == '2') {
$query2 = "SELECT 
			Driver.First_name, 
			Driver.Last_name, 
			Permit.Permit_Type 
        FROM 
			Driver
        INNER JOIN 
			Permit ON Driver.DRIVER_ID = Permit.DRIVER_ID;
";

$result2 = $conn->query($query2);
if(!$result2) die($conn->error);

if ($result2->num_rows > 0) {    
    // Fetch each row of data and display it
    while($row = $result2->fetch_array(MYSQLI_ASSOC)){	
	 echo <<<_END
			<pre>
				First: $row[First_name]
				Last: $row[Last_name]
				Permit: $row[Permit_Type]
			</pre>
	_END;
	
		}
	}else{
		echo "No data found <br>";
	}
	
	 $result2->close();
 }

$conn->close();
}

?>
