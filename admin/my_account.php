<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login if not logged in
    header('Location: login.php');
    exit();
}

// Fetch user details from the database or session
$user_id = $_SESSION['user_id'];

// Add your logic to fetch user details from the database based on $user_id
// For example, let's assume you have a function to get user details
function getUserDetails($user_id) {
    // Add your database connection and query logic here
    // Replace the following line with your actual query
    $user_details = array('username' => 'John Doe', 'email' => 'john@example.com');
    return $user_details;
}

// Fetch user details
$user_details = getUserDetails($user_id);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account</title>
    <!-- Your head content here -->
</head>

<body>
    <!-- Your body content here -->

    <h2>Welcome, <?php echo $user_details['username']; ?>!</h2>
    <p>Email: <?php echo $user_details['email']; ?></p>
    <!-- Add other user details as needed -->

</body>

</html>
