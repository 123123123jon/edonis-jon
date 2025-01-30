<?php

session_start();

include_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT password, role FROM user WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password, $role);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $role;

            if ($role === 'Admin') {
                header("Location: ../PHP/admin.php");
            } else {
                header("Location: ../html/index.php");
            }
            exit();
        } else {
            echo "Username ose Password jane gabim";
            exit();
        }
    } else {
        echo "Username ose Password jane gabim";
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>