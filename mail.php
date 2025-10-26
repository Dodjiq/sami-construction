<?php
// mail.php
// Envoi d'e-mail via PHPMailer

// Empêcher l'accès direct sans POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Méthode non autorisée.');
}

// Charger la config
$config = require_once __DIR__ . '/config.php';

// Charger PHPMailer (chemin relatif à la racine)
require_once __DIR__ . '/PHPMailer-Master/src/Exception.php';
require_once __DIR__ . '/PHPMailer-Master/src/PHPMailer.php';
require_once __DIR__ . '/PHPMailer-Master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Récupérer et nettoyer les données
$nom = trim($_POST['nom'] ?? '');
$email = trim($_POST['email'] ?? '');
$telephone = trim($_POST['telephone'] ?? '');
$message = trim($_POST['message'] ?? '');

// Validation basique
if (empty($nom) || empty($email) || empty($message)) {
    echo json_encode(['success' => false, 'error' => 'Veuillez remplir tous les champs obligatoires.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'error' => 'Adresse e-mail invalide.']);
    exit;
}

// Initialiser PHPMailer
$mail = new PHPMailer(true);

try {
    // Paramètres SMTP
    $mail->isSMTP();
    $mail->Host       = $config['smtp_host'];
    $mail->Port       = $config['smtp_port'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // ou PHPMailer::ENCRYPTION_SMTPS si SSL
    $mail->SMTPAuth   = true;
    $mail->Username   = $config['smtp_username'];
    $mail->Password   = $config['smtp_password'];

    // Expéditeur
    $mail->setFrom($config['mail_from'], $config['mail_from_name']);
    $mail->addAddress($config['mail_to']); // Destinataire

    // Contenu
    $mail->isHTML(false); // Texte brut
    $mail->Subject = 'Nouveau message depuis le formulaire de contact - Sami Construction';
    $mail->Body    = "Nom : $nom\n";
    $mail->Body   .= "Email : $email\n";
    $mail->Body   .= "Téléphone : $telephone\n\n";
    $mail->Body   .= "Message :\n$message";

    // Envoyer
    $mail->send();

    echo json_encode([
        'success' => true,
        'message' => 'Votre message a bien été envoyé.',
        'email' => htmlspecialchars($email)
    ]);
} catch (Exception $e) {
    error_log("PHPMailer Error: " . $mail->ErrorInfo); // Log pour débogage
    echo json_encode(['success' => false, 'error' => 'Erreur lors de l\'envoi : ' . $mail->ErrorInfo]);
}