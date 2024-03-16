<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "house";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted for deletion
if (isset($_GET['delete_id'])) {
    $deleteId = $_GET['delete_id'];
    $deleteQuery = "DELETE FROM orders WHERE id = $deleteId";

    if (mysqli_query($conn, $deleteQuery)) {
        echo "Order deleted successfully!";
    } else {
        echo "Error deleting order: " . mysqli_error($conn);
    }
}

// Fetch orders from the database
$result = mysqli_query($conn, "SELECT * FROM orders");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders Details</title>
    <style>
        body {
            font-family: 'Nunito', 'Roboto', 'Proxima Nova', sans-serif;
            background-color: #f8f9fa;
            color: #495057;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            color: #343a40;
        }

        .order-table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .order-table th,
        .order-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        .order-table th {
            background-color: #007bff;
            color: #fff;
        }

        .delete-btn {
            background-color: #dc3545;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        .delete-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>

<body>

    <h1>Orders Details</h1>

    <table class="order-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Provider ID</th>
                <th>Name</th>
                <th>Pricing</th>
                <th>Card Number</th>
                <th>Name on Card</th>
                <th>Expiry</th>
                <th>CVC</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['provider_id']}</td>";
                echo "<td>{$row['name']}</td>";
                echo "<td>{$row['pricing']}</td>";
                echo "<td>{$row['card_number']}</td>";
                echo "<td>{$row['name_on_card']}</td>";
                echo "<td>{$row['expiry']}</td>";
                echo "<td>{$row['cvc']}</td>";
                echo "<td><a href='?delete_id={$row['id']}' class='delete-btn'>Delete</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>

<?php
// Close the database connection
mysqli_close($conn);
?>
