<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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

// Check if the "REQUEST_METHOD" key exists
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Check if a similar entry already exists
    $checkQuery = "SELECT * FROM contact_data WHERE name='$name' AND email='$email' AND phone='$phone' AND message='$message'";

    $result = $conn->query($checkQuery);

    if ($result === FALSE) {
        die("Error checking duplicate entry: " . $conn->error);
    }

    if ($result->num_rows == 0) {
        // Insert the data into the database
        $insertQuery = "INSERT INTO contact_data (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

        if ($conn->query($insertQuery) === TRUE) {
            echo "Form data successfully submitted";
        } else {
            echo "Error inserting data: " . $conn->error;
        }
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html>
<style>
    .button-link {
        display: inline-block;
        padding: 10px 20px;
        text-decoration: none;
        background-color: red;
        color: #fff;
        border: 1px solid #fff;
        border-radius: 5px;
        transition: background-color 0.3s ease-in-out;
    }

    .button-link:hover {
        background-color: darkred;
    }
</style>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>
    Falconinc
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="contactstyle.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>
           FalconInc
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse innerpage_navbar" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item ">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                Service
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="http://localhost/listrace-v1.0/contact_us.php">Contact Us</a>
            </li>
          </ul>
          <div class="user_option">
            <a href="">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            </a>
            <form class="form-inline ">
              <button class="btn nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->

  </div>
  <!-- end hero area -->

  <!-- contact section -->

  <section class="contact_section layout_padding">
        <div class="container px-0">
            <div class="heading_container">
                <h2>Contact Us</h2>
            </div>
        </div>
        <div class="container container-bg">
            <div class="row">
                
                <div class="col-md-6 col-lg-5 px-0">
                <form action="contact_us.php" method="POST">
    <!-- Your form fields go here -->
    <div>
        <input type="text" name="name" placeholder="Name" required>
    </div>
    <div>
        <input type="email" name="email" placeholder="Email" required>
    </div>
    <div>
        <input type="text" name="phone" placeholder="Phone">
    </div>
    <div>
        <textarea name="message" class="message-box" placeholder="Message" required></textarea>
    </div>
    <div class="d-flex">
        <button type="submit" class="button-link">SEND</button>
    </div>
</form>


                </div>
            </div>
        </div>
    </section>
</form>

<!-- ... (your existing HTML code) ... -->



  <!-- end contact section -->

  <!-- info section -->

  

  <!-- end info section -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>

</body>


</html>
