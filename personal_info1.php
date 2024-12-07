<?php
include 'db_connect.php'; // Include database connection
include 'checksession.php'; // Ensure user is logged in
include 'user.php';


// Retrieve the logged-in user's username from the session
$username = $_SESSION['username'] ?? null;

if ($username) {
    // Fetch user's information from the database
    $stmt = $pdo->prepare("SELECT * FROM Users WHERE username = :username");
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch();

    // If no user is found, display an error
    if (!$user) {
        echo "<h2>Error: User information not found.</h2>";
        exit;
    }
} else {
    // If username is not set in the session, redirect to the login page
    header("Location: login_page.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
</head>
<body>
    <h1>Personal Information</h1>
    <!-- Display the user's personal information -->
    <p><strong>First Name:</strong> <?= htmlspecialchars($user['forename']) ?></p>
    <p><strong>Last Name:</strong> <?= htmlspecialchars($user['surname']) ?></p>
    <p><strong>Username:</strong> <?= htmlspecialchars($user['username']) ?></p>
    <p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>
    <p><strong>Phone:</strong> <?= htmlspecialchars($user['phone'] ?? 'Not Provided') ?></p>
    <!-- Add more fields as needed -->
</body>
</html>
