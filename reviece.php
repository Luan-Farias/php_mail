<?php

$method = strtolower($_SERVER['REQUEST_METHOD']);

if ($method !== 'post') {
    header('Location: /');
    exit;
}

if (!isset($_POST['name']) || !isset($_POST['email'])) {
    header('Location: /');
    exit;
}

require_once "./email-config.php";

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf8' . "\r\n";

// Additional headers
$headers .= 'To: '. $_POST['name'] .' <'. $_POST['email'] .'>' . "\r\n";
$headers .= 'From: Wert <'. $from .'>' . "\r\n";

mail($to, $subject, $message, $headers);

echo "A mensagem de e-mail foi enviada.";