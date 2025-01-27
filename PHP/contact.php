<?php
require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST["name"]) ? htmlspecialchars($_POST["name"]) : "";
    $email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : "";
    $message = isset($_POST["message"]) ? htmlspecialchars($_POST["message"]) : "";
    $subject = "Mesazh nga forma e kontaktit";

    if (empty($name) || empty($email) || empty($message)) {
        echo "Ju lutem plotësoni të gjitha fushat!";
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // Konfiguro SMTP
        $mail->isSMTP();
        $mail->Host = "smtp.example.com"; // Ndrysho me hostin e email-it tuaj
        $mail->SMTPAuth = true;
        $mail->Username = "you@example.com"; // Email-i juaj
        $mail->Password = "password"; // Fjalëkalimi juaj
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Konfiguro dërguesin dhe marrësin
        $mail->setFrom($email, $name);
        $mail->addAddress("dave@example.com", "Dave");

        // Përmbajtja e email-it
        $mail->Subject = $subject;
        $mail->Body = $message;

        // Dërgo email-in
        $mail->send();
        echo "Mesazhi u dërgua me sukses!";
    } catch (Exception $e) {
        echo "Gabim gjatë dërgimit: {$mail->ErrorInfo}";
    }
} else {
    echo "Kërkesa duhet të jetë POST!";
}
?>
