<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/product.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="../JS/productadd.js"></script>
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
            <p style="color: white; padding-top: 15px;"><?php echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'Guest'; ?></p>
            <a href="login.html" class="user-icon">
                <img src="../img/useri.png" alt="Ikona e perdoruesit">
            </a>
        </div>
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="../img/wifi.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../img/switch.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../img/modul.png" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
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
