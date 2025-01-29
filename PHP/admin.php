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

    <?php

        session_start();

        if ($_SESSION['role'] !== 'Admin') {
            header("Location: ../html/index.php");
            exit();
        }

        include_once("config.php");

        if(!$connect){
            alert("Gabim lidhje me bazen e te dhenave: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM user";
        $getUsers = $connect->prepare($sql);
        $getUsers->execute();

        $users_ne_tabel = $getUsers->fetchAll();

    ?>



    <?php
    
        $sqlUsers = "SELECT COUNT(*) as totalUsers FROM user";
        $stmtUsers = $connect->prepare($sqlUsers);
        $stmtUsers->execute();
        $resultUsers = $stmtUsers->fetch();
        $totalUsers = $resultUsers['totalUsers'];

        $sqlProducts = "SELECT COUNT(*) as totalProducts FROM products";
        $stmtProducts = $connect->prepare($sqlProducts);
        $stmtProducts->execute();
        $resultProducts = $stmtProducts->fetch();
        $totalProducts = $resultProducts['totalProducts'];
    ?>

    <div style="text-align: center; background-color: rgba(2, 35, 97, 0.8); width: 250px; height: 100vh;">
        <img border="3px" style="width: 100px; border-radius: 40%; margin-top: 10px; border-radius: 40%;" src="../img/JonKomani.jpg" alt="logoja">
        <h3 style="padding-bottom: 40px;"><?php echo $_SESSION['username'] ?></h3>

        <ul type="none" class="lista">
            <li class="home"><i class="bi bi-house-door" style="padding-right: 30px;"></i>Home</li>
            <li class="product"><i class="bi bi-box-seam" style="padding-right: 30px;"></i>Products</li>
            <li class="user"><i class="bi bi-people" style="padding-right: 30px;"></i>Users</li>
            <li class="contact"><i class="bi bi-person-lines-fill" style="padding-right: 30px;"></i>Contact</li>
            <li><i class="bi bi-window"style="padding-right: 30px;"></i><a style="text-decoration: none; color: white;"  href="../html/index.php"> Website</a></li>
        </ul>

        <button class="buttoni"><a href="../PHP/logout.php" style="color: white; text-decoration: none; margin-top: 50px;">LogOut</a></button>
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

                <?php

                    if(count($users_ne_tabel)>0) {
                        foreach ($users_ne_tabel as $user) {
                            echo "<tr>";
                            echo "<td>{$user['ID']}</td>";
                            echo "<td>{$user['Emri']}</td>";
                            echo "<td>{$user['Email']}</td>";
                            echo "<td>{$user['Username']}</td>";
                            echo "<td>{$user['Role']}</td>";
                            echo "<td><a href='../PHP/delete.php?id={$user['ID']}'>Delete</a></td>";
                            echo "<td><a href='../PHP/update.php?id={$user['ID']}'>Update</a></td>";
                            echo "</tr>";
                        }
                    } else{
                        echo "<tr><td> Nuk ka perdorues</td></tr>";
                    }

                ?>

            </table>
        </div>

        <div class="rendi3">
        <div class="section1">
            <h3>Shto Produkt</h3>
            <form action="../PHP/add_product.php" method="POST" enctype="multipart/form-data">
                <label for="name">Emri:</label>
                <input type="text" name="name" id="name" required>
                <br>
                <label for="type">Tipi:</label>
                <input type="text" name="type" id="type" required>
                <br>
                <label for="model">Modeli:</label>
                <input type="text" name="model" id="model" required>
                <br>
                <label for="image">Ngarko Imazh:</label>
                <input type="file" name="image" id="image" accept="image/*" required>
                <br>
                <label for="admin_name">Admini:</label>
                <select name="admin_name" id="admin_name" required>
                <option value="">Zgjidh Adminin</option>
            <?php
                $sql = "SELECT * FROM user WHERE role = 'Admin'";
                $getAdmins = $connect->prepare($sql);
                $getAdmins->execute();
                $admins = $getAdmins->fetchAll();

                foreach ($admins as $admin) {
                    echo "<option value='{$admin['Username']}'>{$admin['Emri']} ({$admin['Username']})</option>";
                }
            ?>
            </select>
                <br>
                <button type="submit">Shto Produkt</button>
            </form>
            
        </div>

        <!-- Product List -->
        <div>
            <h2>Lista e Produkteve</h2>
            <table border="1px">
                <tr>
                    <th>ID</th>
                    <th>Emri</th>
                    <th>Tipi</th>
                    <th>Modeli</th>
                    <th>Imazhi</th>
                    <th>Admini</th>
                    <th>Fshi</th>
                </tr>
                <?php

                    $stmt = $conn->prepare("SELECT * FROM products");
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {
                        while ($product = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>{$product['id']}</td>";
                            echo "<td>{$product['name']}</td>";
                            echo "<td>{$product['type']}</td>";
                            echo "<td>{$product['model']}</td>";
                            echo "<td><img src='{$product['image_path']}' alt='Product Image' width='50'></td>";
                            echo "<td>{$product['admin_name']}</td>";
                            echo "<td><a href='../PHP/delete_product.php?id={$product['id']}'>Fshi</a></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7'>Nuk ka produkte.</td></tr>";
                    }

                    $stmt->close();
                ?>
            </table>
        </div>
    </div>



    <div class="rendi4">
    <div class="stats-box">
        <h2>Number of Users</h2>
        <p><?php echo $totalUsers; ?></p>
    </div>
    <div class="stats-box">
        <h2>Number of Products</h2>
        <p><?php echo $totalProducts; ?></p>


        
    </div>
</div>

</div>


</body>
</html>
<script src="../JS/admin.js"></script>