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
        <img border="3px" style="width: 100px; border-radius: 40%; margin-top: 10px; border-radius: 40%;" src="../img/JonKomani.jpg" alt="logoja">
        <h3 style="padding-bottom: 40px;">Jon Komani</h3>

        <ul type="none" class="lista">
            <li class="home"><i class="bi bi-house-door" style="padding-right: 30px;"></i>Home</li>
            <li class="product"><i class="bi bi-box-seam" style="padding-right: 30px;"></i>Products</li>
            <li class="user"><i class="bi bi-people" style="padding-right: 30px;"></i>Users</li>
            <li class="user"><i class="bi bi-person-lines-fill" style="padding-right: 30px;"></i>Contact</li>
            <li class="user"><i class="bi bi-window"style="padding-right: 30px;"></i>Website</li>
        </ul>

        <button class="buttoni"><a href="../PHP/logout.php">LogOut</a></button>
    </div>


    <div class="rendi2">
            <div style="position: absolute; top:0px; right: 0px">
                <button style="background-color:blue; padding: 10px; border-radius: 30%;">Add admin</button>
                <button style="background-color:blue; padding: 10px; border-radius: 30%;">Add User</button>
            </div>
            <table border="1px">
                <th>ID</th>
                <th>Emri</th>
                <th>Email</th>
                <th>Username</th>
                <th>Role</th>
                <th>Delete</th>
                <th>Update</th>
            </table>
        </div>

    <div class="rendi3">
            <div style="position: absolute; top:0px; right: 0px">
                <button style="background-color:blue; padding: 10px; border-radius: 30%;">Add product</button>
            </div>
        <table border="1px">
            <th>ID</th>
            <th>Type</th>
            <th>Model</th>
            <th>Name</th>
            <th>Person ID</th>
            <tr>
                <td>12345678</td>
                <td>LCD</td>
                <td>S1227i</td>
                <td>Desktop</td>
                <td>Person ID</td>
            </tr>
        </table>
    </div>
</body>
</html>
<script src="../JS/admin.js"></script>