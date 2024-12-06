<?php
require_once 'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Database connection failed: " . $conn->connect_error);

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo "Please enter username and password.";
        exit;
    }

    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($db_password);
    $stmt->fetch();

    if ($stmt->num_rows > 0) {
        if ($password == $db_password) { // Replace with password_verify for hashed passwords
            echo "Login successful!";
        } else {
            echo "Invalid username or password.";
        }
    } else {
        echo "No such user found.";
    }
    $stmt->close();
} else {
    echo "Please enter username and password.";
}

$conn->close();
?>

