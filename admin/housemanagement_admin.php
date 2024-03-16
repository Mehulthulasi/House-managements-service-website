<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Providers</title>
    <style>
        /* Add your custom styles here */
        .service-provider {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            text-align: center;
        }

        .booking-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
        }

        .booking-button:hover {
            background-color: #45a049;
        }

        .navbar-header a.navbar-brand,
        .navbar-header a.navbar-brand:hover,
        .navbar-header a.navbar-brand:focus {
            display: inline-block;
            color: #1b1e20;
            font-size: 20px;
            font-weight: 700;
            padding: 34px 0px;
            text-transform: capitalize;
        }

        .navbar-header a.navbar-brand span {
            display: inline-block;
            color: #ff545a;
            text-transform: capitalize;
        }

        nav.navbar.bootsnav {
            background-color: #fff;
            border-bottom: transparent;
        }

        .wrap-sticky nav.navbar.bootsnav.sticked {
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, .2);
        }

        .wrap-sticky nav.navbar.bootsnav.sticked .navbar-header a.navbar-brand,
        .wrap-sticky nav.navbar.bootsnav.sticked .navbar-header a.navbar-brand:hover,
        .wrap-sticky nav.navbar.bootsnav.sticked .navbar-header a.navbar-brand:focus {
            padding: 30px 0px;
        }

        nav.navbar.bootsnav ul.nav>li>a {
            color: #859098;
            font-size: 14px;
            font-weight: 500;
            text-transform: uppercase;
            -webkit-transition: 0.3s linear;
            -moz-transition: 0.3s linear;
            -ms-transition: 0.3s linear;
            -o-transition: 0.3s linear;
            transition: 0.3s linear;
        }

        nav.navbar.bootsnav ul.nav>li>a {
            padding: 34px 21px;
        }

        nav.navbar.bootsnav ul.nav>li>a:hover,
        nav.navbar.bootsnav ul.nav>li>a:focus {
            color: #ff545a;
        }

        nav.navbar.bootsnav ul.nav>li.active>a {
            color: #ff545a;
        }

        nav.navbar.bootsnav ul.nav>li.dropdown>a.dropdown-toggle:after {
            content: "";
        }

        .menu-ui-design {
            overflow-y: scroll;
            height: 350px;
        }

        .menu-ui-design::-webkit-scrollbar {
            width: 5px;
        }

        .menu-ui-design::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 8px #000;
        }

        .menu-ui-design::-webkit-scrollbar-thumb {
            background-color: #ff545a;
        }

        nav.navbar.bootsnav .navbar-toggle {
            position: relative;
            background-color: transparent;
            border: 1px solid #ff545a;
            padding: 10px;
            top: 0;
        }

        nav.navbar.bootsnav .navbar-toggle i {
            color: #ff545a;
        }
        
        .menu-ui-design {
    display: flex;
    justify-content: flex-end;
}

.menu-ui-design ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

.menu-ui-design ul li {
    margin-right: 15px;
}

.menu-ui-design ul li:last-child {
    margin-right: 0;
}
/* Header Styles */
.navbar.bootsnav {
    background-color: #fff;
    border-bottom: transparent;
    padding: 10px 0;
}

.navbar.bootsnav .navbar-header {
    padding: 0;
}

.navbar.bootsnav .navbar-header a.navbar-brand,
.navbar.bootsnav .navbar-header a.navbar-brand:hover,
.navbar.bootsnav .navbar-header a.navbar-brand:focus {
    display: inline-block;
    color: #1b1e20;
    font-size: 20px;
    font-weight: 700;
    padding: 10px 0; /* Adjusted padding for better alignment */
    text-transform: capitalize;
}

.navbar.bootsnav .navbar-header a.navbar-brand span {
    display: inline-block;
    color: #ff545a;
    text-transform: capitalize;
}

/* Navigation Bar Styles */
.navbar.bootsnav ul.nav>li>a {
    color: #859098;
    font-size: 14px;
    font-weight: 500;
    text-transform: uppercase;
    padding: 15px 15px;
    -webkit-transition: 0.3s linear;
    -moz-transition: 0.3s linear;
    -ms-transition: 0.3s linear;
    -o-transition: 0.3s linear;
    transition: 0.3s linear;
}

.navbar.bootsnav ul.nav>li>a:hover,
.navbar.bootsnav ul.nav>li>a:focus {
    color: #ff545a;
}

.navbar.bootsnav ul.nav>li.active>a {
    color: #ff545a;
}

.navbar.bootsnav ul.nav>li.dropdown>a.dropdown-toggle:after {
    content: "";
}

/* Navbar Toggle Button Styles */
.navbar.bootsnav .navbar-toggle {
    position: relative;
    background-color: transparent;
    border: 1px solid #ff545a;
    padding: 10px;
    top: 0;
}

.navbar.bootsnav .navbar-toggle i {
    color: #ff545a;
}

/* Menu UI Design Styles */
.menu-ui-design {
    overflow-y: auto; /* Use auto for automatic scrollbar appearance */
    max-height: 50px; /* Adjusted max height for a more balanced look */
    border: 1px solid #ccc; /* Added a subtle border */
    border-radius: 5px; /* Added border-radius for a softer look */
    padding: 10px; /* Added padding for better spacing */
}

.menu-ui-design::-webkit-scrollbar {
    width: 8px;
}

.menu-ui-design::-webkit-scrollbar-track {
    background-color: #f1f1f1; /* Lighter background color for the scrollbar track */
}

.menu-ui-design::-webkit-scrollbar-thumb {
    background-color: #ff545a;
    border-radius: 4px; /* Rounded corners for the scrollbar thumb */
}

.menu-ui-design ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-wrap: wrap; /* Allow flex items to wrap onto the next line */
}

.menu-ui-design ul li {
    margin-right: 15px;
    margin-bottom: 10px; /* Added margin-bottom for better item separation */
}

.menu-ui-design ul li:last-child {
    margin-right: 0;
}


    </style>
</head>

<body>
    
    <nav class="navbar bootsnav">
        <div class="navbar-header">
            <a class="navbar-brand">Falcon<span>inc</span></a>
        </div>

        <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="index.html">Services</a></li>
        <li><a href="http://localhost/listrace-v1.0/contact_us.php">Contact</a></li>
    </ul><!--/.nav -->
</div>
    </nav>
    

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "house";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM housemanagement";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='service-provider' id='provider{$row['id']}'>";
            echo "<img src='{$row['image']}' alt='Service Provider Avatar' height='190px' width='210px'>";
            echo "<h3>{$row['name']}</h3>";
            echo "<p>Rating: {$row['rating']}</p>";
            echo "<p>Pricing: {$row['pricing']}</p>";
            echo "<p>Square Meter: {$row['square_meter']}</p>";
            echo "<button class='booking-button' onclick='bookService(" . $row['id'] . ", \"" . $row['name'] . "\", \"" . $row['rating'] . "\", \"" . $row['pricing'] . "\", \"" . $row['square_meter'] . "\")'>Book Now</button>";
            echo "</div>";
        }
    } else {
        echo "No service providers available.";
    }

    $conn->close();
    ?>

    <script>
        function bookService(providerId, name, rating, pricing, squareMeter) {
            console.log('Book service provider:', providerId);

            // Redirect to the payment page with parameters
            window.location.href = 'payment_page.php?id=' + providerId +
                '&name=' + encodeURIComponent(name) +
                '&rating=' + encodeURIComponent(rating) +
                '&pricing=' + encodeURIComponent(pricing) +
                '&squareMeter=' + encodeURIComponent(squareMeter);
        }
    </script>

</body>

</html>
