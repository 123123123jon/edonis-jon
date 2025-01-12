<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body style="display: flex; color: white;">

    <div style="text-align: center; background-color: rgba(2, 35, 97, 0.8); width: 250px; height: 100vh;">
        <img border="3px" style="width: 100px; border-radius: 40%; margin-top: 10px; border-radius: 40%;" src="../img/user.tiff" alt="logoja">
        <h3 style="padding-bottom: 40px;">Jon Komani</h3>
        <p style="color: white;"><?php echo htmlspecialchars($_SESSION['full_name']); ?></p>

        <ul type="none" class="lista">
            <li class="home"><i class="bi bi-house-door" style="padding-right: 30px;"></i>Home</li>
            <li class="product"><i class="bi bi-box-seam" style="padding-right: 30px;"></i>Products</li>
            <li class="user"><i class="bi bi-people" style="padding-right: 30px;"></i>Users</li>
        </ul>

        <button class="buttoni"><a href="../PHP/logout.php" class="login" style="text-decoration:none;">LogOut</a></button>
    </div>

</body>
</html>