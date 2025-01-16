<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/product.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="../JS/slider.js"></script>
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

    <div style="display: flex; flex-direction: row; align-items:center;">
      <button id="btn">Back</button>
      <div id="karusel">
          <img name="mySlide" id="drejto" />
      </div>
      <button id="btn" onclick="vazhdo()">Next</button>
    </div>

      <div style="gap: 10px;">
        <div class="renditi">
            <div class="imazhet">
              <img src="../img/Router.jpg" alt="Router">
              <div>
                <h5>Router W5</h5>
                <strong>400$</strong>
                <i class="bi bi-bag fs-4"></i>
              </div>
            </div>
            
            <div class="imazhet">
              <img src="../img/Router.jpg" alt="Router">
              <div>
                <h5>Router W5</h5>
                <strong>400$</strong>
                <i class="bi bi-bag fs-4"></i>
              </div>
            </div>

            <div class="imazhet">
              <img src="../img/Router.jpg" alt="Router">
              <div>
                <h5>Router W5</h5>
                <strong>400$</strong>
                <i class="bi bi-bag fs-4"></i>
              </div>
            </div>

          <div class="imazhet">
            <img src="../img/Router.jpg" alt="Router">
            <div>
              <h5>Router W5</h5>
              <strong>400$</strong>
              <i class="bi bi-bag fs-4"></i>
            </div>
          </div>
          
          <div class="imazhet">
            <img src="../img/Router.jpg" alt="Router">
            <div>
              <h5>Router W5</h5>
              <strong>400$</strong>
              <i class="bi bi-bag fs-4"></i>
            </div>
          </div>

          <div class="imazhet">
            <img src="../img/Router.jpg" alt="Router">
            <div>
              <h5>Router W5</h5>
              <strong>400$</strong>
              <i class="bi bi-bag fs-4"></i>
            </div>
          </div>

        <div class="imazhet">
          <img src="../img/Router.jpg" alt="Router">
          <div>
            <h5>Router W5</h5>
            <strong>400$</strong>
            <i class="bi bi-bag fs-4"></i>
          </div>
        </div>
        
        <div class="imazhet">
          <img src="../img/Router.jpg" alt="Router">
          <div>
            <h5>Router W5</h5>
            <strong>400$</strong>
            <i class="bi bi-bag fs-4"></i>
          </div>
        </div>

        <div class="imazhet">
          <img src="../img/Router.jpg" alt="Router">
          <div>
            <h5>Router W5</h5>
            <strong>400$</strong>
            <i class="bi bi-bag fs-4"></i>
          </div>
        </div>
    </div>
      </div>

</body>
</html>
