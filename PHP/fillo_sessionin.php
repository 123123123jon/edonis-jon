<?php

session_start();

if(isset($username) && isset($password)){
    $_SESSION['username']=$username;
    $_SESSION['role']=$role;

    header("Location: ../html/index.html");
    exit();
}

?>