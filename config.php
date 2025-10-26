<?php
// config.php
// Configuration centrale — garder ce fichier hors du repo public (gitignore)

return [
    // Mail / SMTP (utilisé par PHPMailer)
    'smtp_host'      => 'sami-constructions.btov-dev.fr',
    'smtp_port'      => 587,
    'smtp_secure'    => 'tls', // ou 'ssl' si port 465
    'smtp_username'  => 'contact@sami-constructions.btov-dev.fr',
    'smtp_password'  => '9}GBqz=NdjuU',

    // Informations d'expéditeur
    'mail_from'      => 'contact@sami-construction.com',
    'mail_from_name' => 'SAMI Constructions',
    'mail_to'        => 'contact@sami-construction.com',
];