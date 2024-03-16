<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "house";
$socket = "/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock";

$conn = new mysqli($servername, $username, $password, $dbname, null, $socket);

// Check database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all entries from the database
$selectQuery = "SELECT * FROM contact_data";
$result = $conn->query($selectQuery);

if ($result === FALSE) {
    die("Error fetching data: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Data</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #FF4742; /* Updated to red color */
            color: white;
        }

        p {
            text-align: center;
            color: #555;
        }

        button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #FF4742; /* Updated to red color */
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #D43F3A; /* Darker shade on hover */
        }
    </style>
</head>

<body>

    <h1>Contact Data</h1>

    <?php if ($result->num_rows > 0) : ?>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()) : ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['message']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else : ?>
        <p>No entries found</p>
    <?php endif; ?>

    <!-- Button to redirect to index.html -->
    <button onclick="window.location.href = 'index_admin.html';">Go to Home Page</button>

    <?php $conn->close(); ?>

</body>

</html>
