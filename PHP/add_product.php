<?php
include_once("config.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $model = $_POST['model'];

    // Ngarko imazhin
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image = $_FILES['image'];
        $imagePath = "../img/product/" . basename($image['name']);
        move_uploaded_file($image['tmp_name'], $imagePath);

        $stmt = $conn->prepare("INSERT INTO products (name, type, model, image_path) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $type, $model, $imagePath);

        if ($stmt->execute()) {
            header("Location: admin.php"); // Rinisni në faqen e produkteve pas shtimit të sukseshem
            exit();
        } else {
            echo "Gabim gjatë shtimit të produktit.";
        }

        $stmt->close();
    } else {
        echo "Gabim në ngarkimin e imazhit.";
    }
}
?>
