<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/about.css">
</head>
<body>

    <?php
        session_start();
    ?>

    <div class="navbar">
        <a href="index.html" class="logo"><img src="../img/logo.png" alt=""></a>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li>
                <a href="product.php">Products</a>
                <ul>
                    <li><a href="#">Switch</a></li>
                    <li><a href="router.html">Router</a></li>
                    <li><a href="#">Module Wifi</a></li>
                </ul>
            </li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
        </ul>
        <div class="user-options">
            <p style="color: white;"><?php echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'Guest'; ?></p>
            <a href="login.html" class="user-icon">
                <img src="../img/useri.png" alt="Ikona e perdoruesit">
            </a>
        </div>
    </div>

    <section class="about-us">
        <h2>About Us <i class="fas fa-bolt"></i></h2>
        <div class="about-content">
            <div class="about-icon">
                <h3>Smart Homes</h3>
                <p>We transform your living spaces into intelligent environments, enhancing comfort and efficiency.</p>
            </div>
            <div class="about-icon">
                
                <h3>Energy Efficient</h3>
                <p>Our products are designed to optimize energy consumption, helping you save costs and reduce your carbon footprint.</p>
            </div>
            <div class="about-icon">
                <h3>Customer Support</h3>
                <p>Our team is dedicated to providing excellent customer service and support for your smart home journey.</p>
            </div>
        </div>
    </section>
    