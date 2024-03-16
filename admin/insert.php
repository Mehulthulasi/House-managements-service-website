<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "house";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database Connection Error: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $rating = $_POST["rating"];
    $pricing = $_POST["pricing"];
    $square_meter = $_POST["square_meter"];
    $image = $_POST["image"]; // Assuming you have a form field for the image path

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO `service_provider2`( `name`, `rating`, `pricing`, `square_meter`, `image`)VALUES (?, ?, ?, ?, ?)");
    
    // Bind parameters
    $stmt->bind_param("sssss", $name, $rating, $pricing, $square_meter, $image);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    echo "Form not submitted.";
}

// Close the connection
$conn->close();
?>
