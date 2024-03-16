<!DOCTYPE html>
<html>

<head>
    <title>Payment</title>
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
                    <h2>Payment</h2>
                </div>

                <?php
                // Retrieve parameters from the URL
                $providerId = $_GET['id'];
                $name = urldecode($_GET['name']);
                $rating = urldecode($_GET['rating']);
                $pricing = urldecode($_GET['pricing']);
                $squareMeter = urldecode($_GET['$squareMeter']);
                ?>

                <form action="process_order.php" method="post">
                    <div class="products">
                        <h3 class="title">Your Order</h3>
                        <div class="item">
                            <p>ID: <?php echo $providerId; ?></p>
                            <p>Name: <?php echo $name; ?></p>
                            <p>Pricing: <?php echo $pricing; ?></p>
                        </div>
                        <div class="total">Total<span class="price"><?php echo $pricing; ?></span></div>
                    </div>

                    <input type="hidden" name="providerId" value="<?php echo $providerId; ?>">
                    <input type="hidden" name="name" value="<?php echo $name; ?>">
                    <input type="hidden" name="pricing" value="<?php echo $pricing; ?>">

                    <main>
    <section class="card-section">
        <div class="container">
            <form>
                <div class="card-details">
                    <h3 class="title">Payment</h3>
                    <div class="inputs">
                        <div class="row">
                            <div class="column card-group">
                                <label class="label" for="card">Card</label>
                                <input class="text-input card-input" id="card" name="card" placeholder="1234 5678 9012 3456">
                            </div>
                        </div>
                        <div class="row">
                            <div class="column name-group">
                                <label class="label" for="name">Name on Card</label>
                                <input class="text-input name-input" id="name" name="name">
                            </div>
                            <div class="column expiry-group">
                                <label class="label" for="expiry">Expiry</label>
                                <input class="text-input expiry-input" id="expiry" name="expiry" placeholder="dd/yy">
                            </div>
                        </div>
                        <div class="row">
                            <div class="column cvc-group">
                                <label class="label" for="cvc">CVC/Security Code</label>
                                <input class="text-input cvc-input" id="cvc" name="cvc">
                            </div>
                            <div class="column cvc-help">3-4 digit code. Usually on the back, by the signature.</div>
                        </div>
                    </div>
                    <div class="buttons" style="text-align: center;">
                        <button type="submit" class="order-button">Order</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>


    <!-- Add your JavaScript links or scripts here -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
