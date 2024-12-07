

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
<title> Create Account </title>
</head>

<body>
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
<title> Create Account </title>
</header>

<body>
	<header>
  <h1> Create Account  </h1>
  </header>

    <div class="container">
        <h1>Create Account</h1>
        <form action="home_page.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Create Account</button>
        </form>
    </div>
</body>


</html>
<?php




?>