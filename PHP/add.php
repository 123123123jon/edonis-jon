<?php

include_once('config.php');

if(isset($_POST['submit'])){
    $name = $_POST['Emri'];
    $email = $_POST['Email'];
    $username = $_POST['Username'];
    $password = password_hash($_POST['Password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO user(Emri, Email, Username, Password) values(:name, :email, :username, :password)";

    $pergatite = $connect->prepare($sql);

    $pergatite->bindParam(':name', $name);
    $pergatite->bindParam(':email', $email);
    $pergatite->bindParam(':username', $username);
    $pergatite->bindParam(':password', $password);

    $pergatite->execute();

    header("Location: ../html/login.html");
    exit();

}