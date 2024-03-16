<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $providerId = $_POST['providerId'];
    $name = $_POST['name'];
    $rawPricing = $_POST['pricing'];
    $cardNumber = $_POST['card'];
    $nameOnCard = $_POST['name'];
    $expiry = $_POST['expiry'];
    $cvc = $_POST['cvc'];

    // TODO: Validate and sanitize the input data

    // Sanitize pricing (remove non-numeric characters)
    $pricing = preg_replace('/[^0-9.]/', '', $rawPricing);

    // Save the details to the database (replace with your database connection logic)
    // Example using PDO:
    $dsn = 'mysql:host=localhost;dbname=house';
    $username = 'root';
    $password = '';

    try {
        $conn = new PDO($dsn, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare the SQL query
        $sql = "INSERT INTO orders (provider_id, name, pricing, card_number, name_on_card, expiry, cvc) VALUES (:providerId, :name, :pricing, :cardNumber, :nameOnCard, :expiry, :cvc)";
        $stmt = $conn->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':providerId', $providerId);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':pricing', $pricing);
        $stmt->bindParam(':cardNumber', $cardNumber);
        $stmt->bindParam(':nameOnCard', $nameOnCard);
        $stmt->bindParam(':expiry', $expiry);
        $stmt->bindParam(':cvc', $cvc);

        // Execute the query
        $stmt->execute();

        // Close the connection
        $conn = null;

        // Redirect to confirmation page with order details
        header("Location: confirmation_page.php?order_id=" . $providerId);
        exit();

    } catch (PDOException $e) {
        // Log detailed error message
        error_log("Error inserting data into database: " . $e->getMessage());

        // Print detailed error message for debugging (remove in production)
        echo "An error occurred. Please try again later. Error details: " . $e->getMessage();
        exit();
    }
} else {
    // Redirect to payment page if accessed without form submission
    // header("Location: payment_page.php");
    // exit();
    echo "Form not submitted.";
}
?>
