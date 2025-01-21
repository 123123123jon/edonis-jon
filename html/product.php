<?php
    session_start();
    include_once("../PHP/config2.php"); 
    $stmt = $connect->prepare("SELECT * FROM products");
    $stmt->execute();
    $result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/product.css">

    

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="../JS/slider.js"></script>
</head>
<body>

    <div class="navbar">
        <a href="index.html" class="logo"><img src="../img/logo.png" alt=""></a>
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

    <div id="karusel">
        <button id="btn-back" class="button" onclick="previousImage()">Back</button>
        <img name="mySlide" id="drejto" />
        <button id="btn-next" class="button" onclick="vazhdo()">Next</button>


    
</div>  
        <div class="product-items">
            <?php
            if ($result->num_rows > 0) {
                // Shfaqni çdo produkt
                while ($product = $result->fetch_assoc()) {
                    echo '<div class="product-item">';
                    echo '<img src="' . $product['image_path'] . '" alt="Product Image" class="product-image">';
                    echo '<div class="product-info">';
                    echo '<h3>' . $product['name'] . '</h3>';
                    echo '<p>' . $product['type'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p>No products available.</p>';
            }
            ?>
        </div>
    </div>
</body>
</html>

<?php
    $stmt->close();
?>
