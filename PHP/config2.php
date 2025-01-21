<?php
// Detajet e lidhjes me bazën e të dhënave
$host = "localhost";
$username = "root";
$password = "";
$database = "product"; // E njëjta bazë për të dyja tabelat

// Krijimi i lidhjes me MySQL
$connect = new mysqli($host, $username, $password, $database);

// Kontrollo lidhjen
if ($connect->connect_error) {
    die("Lidhja me bazën e të dhënave dështoi: " . $connect->connect_error);
}
?>
