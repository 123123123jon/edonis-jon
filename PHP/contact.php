<?php

require "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EmailSender {
    private $mailer;

    public function __construct() {
        $this->mailer = new PHPMailer(true);

        // Konfigurimi i SMTP
        $this->mailer->isSMTP();
        $this->mailer->SMTPAuth = true;
        $this->mailer->Host = "smtp.office365.com";
        $this->mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $this->mailer->Port = 587;

        // Kredencialet e email-it
        $this->mailer->Username = "jk70779@ubt-uni.net";
        $this->mailer->Password = "Joni.1234";

        // Email-i dërgues
        $this->mailer->setFrom("jk70779@ubt-uni.net", "Web Form");
    }

    public function sendEmail($name, $email, $message) {
        try {
            // Validimi i input-it
            if (empty($name) || empty($email) || empty($message)) {
                throw new Exception("Të gjitha fushat duhet të plotësohen!");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new Exception("Adresa e email-it është e pavlefshme!");
            }

            // Shtimi i marrësit dhe përmbajtjes
            $this->mailer->addReplyTo($email, $name);
            $this->mailer->addAddress("komanijon372@gmail.com", "Dave");
            $this->mailer->Subject = "Degese email nga aplikacioni";
            $this->mailer->Body = "Mesazhi: $message\n\nEmri: $name\nEmail: $email";

            // Dërgimi i email-it
            $this->mailer->send();
        } catch (Exception $e) {
            throw new Exception("Gabim gjatë dërgimit të email-it: " . $e->getMessage());
        }
    }
}

// Përdorimi i klasës
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $name = isset($_POST["name"]) ? htmlspecialchars(trim($_POST["name"])) : "";
        $email = isset($_POST["email"]) ? htmlspecialchars(trim($_POST["email"])) : "";
        $message = isset($_POST["message"]) ? htmlspecialchars(trim($_POST["message"])) : "";

        $emailSender = new EmailSender();
        $emailSender->sendEmail($name, $email, $message);

        header("Location: ../html/index.php");
        exit;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
} else {
    echo "Kërkesa duhet të jetë POST!";
}

?>
