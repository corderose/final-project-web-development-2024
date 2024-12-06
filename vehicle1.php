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
	
	<h2> Vehicle Information  </h2>
	</header>
	
	
	<body>
		<form method='post' action='buy_permit.php'>
			<pre>
				Name: <input type='text' name='name'>
				Vehicle Make: <input type='text' name='make'>
				Vehicle Model: <input type='text' name='model'>
				License Plate: <input type='text' name='plate'>
				Year: <input type='text' name='year'>
				<input type='submit' value='Add Vehicle'>
			</pre>
		</form>
	</body>



</html>