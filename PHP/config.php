<?php

$server = 'localhost';
$dbname = 'users';
$username = 'root';
$password = '';

try{
    $connect = new PDO("mysql:host=$server; dbname=$dbname", $username,$password);
}catch(Exception $e){
    echo "Something went wrong";
}

?>