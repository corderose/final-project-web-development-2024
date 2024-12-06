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
	<header>
		<h1> Buy Permit </h1>
	</header>
	</body>
	
	<body>
		
		<form method='post' action='buy_permit.php'>
			<pre>
			<h3> Buy Permit $99 </h3>
				Quantity: <input type='text' name='name'>
				<input type='submit' value='Buy Permit'>
			</pre>
		</form>
	</body>
</html>

<?php

$page_roles = array('admin');

require_once 'login.php';
require_once 'checksession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

echo "<a href='logout.php'>Logout</a>";

//check if ISBN exists
if(isset($_POST['isbn'])) 
{
	//Get data from POST object
	$isbn = $_POST['isbn'];
	$author = $_POST['author'];
	$title = $_POST['title'];
	$category = $_POST['category'];
	$year = $_POST['year'];
	
	$query = "INSERT INTO classics (isbn, author, title, category, year) 
	VALUES ('$isbn', '$author','$title', '$category', '$year')";
	
	$result = $conn->query($query); 
	if(!$result) die($conn->error);
	
	header("Location: viewRecord.php");//this will return you to the view all page
	
}

$conn->close();
















?>