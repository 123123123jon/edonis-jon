<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Tech</title>
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/index.css">
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
            <?php if (isset($_SESSION['username'])): ?>
                <a href="../PHP/logout.php" class="login">Log Out</a>
            <?php else: ?>
                <a href="../html/login.html" class="login">Log In</a>
            <?php endif; ?>
            <a href="../htmlphp/index.php" class="user-icon">
                <img src="../img/useri.png" alt="Ikona e perdoruesit">
            </a>
        </div>
    </div>

    <!-- Container për mesazhin hyrës -->   
    <div class="welcome-container">
        <div class="welcome-message">
            <h1>Welcomee to the World's Smartest Building Automation System</h1>
            <p>All-in-one control. In perfect harmony.</p>
            <a href="product.html" class="btn">Explore Products</a>
        </div>
    </div>
</body>
</html>