<?php


include_once('config.php');


if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM user WHERE ID=:id";

    $fshije_personin = $connect->prepare($sql);

    $fshije_personin->bindParam(':id', $id);

    $fshije_personin->execute();

    header("Location: ../PHP/admin.php");
    exit();
}else{
    echo "Ka mundesi qe id nuk eshte derguar me sukses";
    exit();
}
?>