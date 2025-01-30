<?php

    include_once('config.php');

    if(isset($_GET['id'])){
        
        $id = $_GET['id'];

        $sql = "SELECT * FROM USER WHERE ID=:id";
        $pergatite = $connect->prepare($sql);
        $pergatite->bindParam(':id', $id);
        $pergatite->execute();
        $user = $pergatite->fetch(PDO::FETCH_ASSOC);

        if(!$user){
            echo "Perdoruesi me ID $id nuk u gjet.";
            exit();
        }

        if(isset($_POST['submit'])){
            $name = $_POST['Emri'];
            $email = $_POST['Email'];
            $username = $_POST['Username'];
            $role = $_POST['Role'];
            $password = password_hash($_POST['Password'], PASSWORD_DEFAULT);

            $sql = "UPDATE user SET Emri=:name, Email=:email, Username=:username, Role=:role, Password=:password WHERE ID=:id";
            $pergatite = $connect->prepare($sql);
            $pergatite = $connect->prepare($sql);
            $pergatite->bindParam(':name', $name);
            $pergatite->bindParam(':email', $email);
            $pergatite->bindParam(':username', $username);
            $pergatite->bindParam(':role', $role);
            $pergatite->bindParam(':password', $password);
            $pergatite->bindParam(':id', $id);

            try{
                $pergatite->execute();
                header("Location: ../PHP/admin.php");
                exit();
            } catch (PDOException $e)    {
                echo "Gabim gjate perditesimit: " . $e->getMessage();
            }
        }
    }else {
            echo "ID nuk eshte e specifikuar.";
            exit();
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update User</title>
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="position">
        <div class="login-container">
            <h2>Update User</h2>
            <!-- Ndrysho action në update.php dhe merr ID-në nga URL -->
            <form class="login-form" id="passwordForm" action="update.php?id=<?php echo $user['ID']; ?>" method="post">
                <div class="input-container">
                    <input type="text" name="Emri" value="<?php echo htmlspecialchars($user['Emri']); ?>" required>
                    <label>Full Name</label>
                </div>
                <div class="input-container">
                    <input type="email" name="Email" value="<?php echo htmlspecialchars($user['Email']); ?>" required>
                    <label>Email</label>
                </div>
                <div class="input-container">
                    <input type="text" name="Username" value="<?php echo htmlspecialchars($user['Username']); ?>" required>
                    <label>Username</label>
                </div>
                <div class="input-container">
                    <input type="text" name="Role" value="<?php echo htmlspecialchars($user['Role']); ?>" required>
                    <label>Role</label>
                </div>
                <div class="input-container">
                    <input type="password" name="Password" id="password">
                    <label>Password</label>
                </div>
                <div class="input-container">
                    <input type="password" id="confirm">
                    <label>Confirm Password</label>
                </div>
                <button type="submit" name="submit" value="Update">Update</button>
            </form>
            <p id="vlersimi" class="error"></p>
        </div>
    </div>
</body>
<script src="../JS/create.js"></script>
</html>
