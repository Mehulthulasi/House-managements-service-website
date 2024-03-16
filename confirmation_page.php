<!DOCTYPE html>
<html lang="en">

<head>
    <title>Order Confirmation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="payment_page.css">
</head>

<body>

    <main class="page payment-page">
        <section class="payment-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2>Order Confirmation</h2>
                </div>

                <?php
                // Retrieve order ID from the URL
                $orderId = $_GET['order_id'];
                ?>

                <div class="confirmation-message">
                    <p>Your order with ID <?php echo $orderId; ?> has been successfully placed. Thank you for your purchase!</p>
                </div>
            </div>
        </section>
    </main>
    <button onclick="redirectToIndex()" style="margin: 20px;">Go to Index</button>

    <!-- Add your JavaScript links or scripts here -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        function redirectToIndex() {
            window.location.href = 'index.html';
        }
    </script>
</body>

</html>
