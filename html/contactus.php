<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Tech</title>
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/contact.css">
</head>
<body>

    <?php
        session_start();
    ?>

    <div class="navbar">
        <a href="#" class="logo"><img src="../img/logo.png" alt=""></a>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="product.php">Products</a></li>
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

    <div class="contact-container">
        <h1>Contact Us</h1>
        <p>If you have any questions, feedback, or inquiries about our products, please don't hesitate to reach out!</p>
    
        <div class="contact-form">
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="name">Your Full Name:</label>
                    <input type="text" id="name" name="name" required placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Your Email Address:</label>
                    <input type="email" id="email" name="email" required placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="message">Your Message:</label>
                    <textarea id="message" name="message" rows="5" required placeholder="Write your message here..."></textarea>
                </div>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>

        <div class="contact-info">
        <h2>Contact Information</h2>
        <div class="info-item">
            <i class="fas fa-phone-alt"></i>
            <p>Phone: +383/049588278</p>
        </div>
        <div class="info-item">
            <i class="fas fa-envelope"></i>
            <p>  Email:  <a id="email" href="info@smarttech.com">info@smarttech.com</a></p>
        </div>
        <div class="info-item">
            <i class="fas fa-map-marker-alt"></i>
            <p>Address: Rr.Ubt-Uni, Prishtin, 10000</p>
        </div>
    </div>

</body>
</html>