<?php

include_once("config.php");

require "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EmailSender {
    private $mailer;

    public function __construct() {
        $this->mailer = new PHPMailer(true);

        $this->mailer->isSMTP();
        $this->mailer->SMTPAuth = true;
        $this->mailer->Host = "smtp.office365.com";
        $this->mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $this->mailer->Port = 587;

        $this->mailer->Username = "jk70779@ubt-uni.net";
        $this->mailer->Password = "Joni.1234";

        $this->mailer->setFrom("jk70779@ubt-uni.net", "Web Form");
    }

    public function sendEmail($name, $email, $message) {
        try {
            if (empty($name) || empty($email) || empty($message)) {
                throw new Exception("Të gjitha fushat duhet të plotësohen!");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new Exception("Adresa e email-it është e pavlefshme!");
            }

            $this->mailer->addReplyTo($email, $name);
            $this->mailer->addAddress("komanijon372@gmail.com", "Dave");
            $this->mailer->Subject = "Degese email nga aplikacioni";
            $this->mailer->Body = "Mesazhi: $message\n\nEmri: $name\nEmail: $email";

            $this->mailer->send();
        } catch (Exception $e) {
            throw new Exception("Gabim gjatë dërgimit të email-it: " . $e->getMessage());
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $name = isset($_POST["name"]) ? htmlspecialchars(trim($_POST["name"])) : "";
        $email = isset($_POST["email"]) ? htmlspecialchars(trim($_POST["email"])) : "";
        $message = isset($_POST["message"]) ? htmlspecialchars(trim($_POST["message"])) : "";

        $emailSender = new EmailSender();
        $emailSender->sendEmail($name, $email, $message);

        $sql = "INSERT INTO contact(Emri, Email, Mesazhi) values(:name, :email, :message)";
        
        $vazhdo = $connect->prepare($sql);

        $vazhdo->bindParam(':name', $name);
        $vazhdo->bindParam(':email', $email);
        $vazhdo->bindParam(':message', $message);

        $vazhdo->execute();

        header("Location: ../html/index.php");
        exit;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
} else {
    echo "Kërkesa duhet të jetë POST!";
}

?>
