<?php

// Démarrer la session pour accéder aux variables de session et les modifier



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require_once __DIR__ . '/../vendor/autoload.php';



// Ajuste selon ton chemin d'autoload

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../'); // remonte d’un dossier 
$dotenv->load();

$host = $_ENV['DB_HOST'];
$port = $_ENV['DB_PORT'];
$dbname = $_ENV['DB_NAME'];
$user = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASSWORD'];


$pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['newsletter_submit'])) {
    $email = filter_var($_POST['email_newsletter'], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Vérifier si l'email existe déjà dans phpMyAdmin
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM newsLetter WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $count = $stmt->fetchColumn();
        if ($count == 0) {
            // Insérer l'email dans la base de données
            $stmt = $pdo->prepare("INSERT INTO newsLetter (email) VALUES (:email)");
            $stmt->execute(['email' => $email]);
            $success = "Merci pour votre inscription à la newsletter !";

            // Envoi de l'email de a l'administrateur
            $mail = new PHPMailer(true);
            try {
                // Configuration SMTP Gmail
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'wakeskate.fr@gmail.com';
                $mail->Password = 'rhyn zsff yiam lbdo'; // mot de passe d'application
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                $mail->CharSet = 'UTF-8';

                // Infos de l'email
                $mail->setFrom($email, 'Nouvel abonné(e) à la newsletter');
                $mail->addAddress('wakeskate.fr@gmail.com');

                $mail->isHTML(true);
                $mail->Subject = 'Nouvel abonné(e) à la newsletter';
                $mail->Body = "
                    <h2>Nouvel abonné(e)</h2>
                    <p>Un nouvel utilisateur vient de s'inscrire à la newsletter.</p>
                    <p><strong>Email:</strong> {$email}</p>
                ";

                $mail->send();
            } catch (Exception $e) {
            }
        } else {
            $error = "Cet email est déjà inscrit à la newsletter.";
        }
    } else {
        $error = "L'adresse e-mail n'est pas valide.";
    }
}
