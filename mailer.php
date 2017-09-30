<?php

require_once __DIR__.'/vendor/autoload.php';

$mail = new Mail;
$mail['from'] = 'lionel@example.org';
$mail['to'] = 'adit@eyepaste.com';
$mail['subject'] = 'Hey, I saw you last night!';
$mail['body'] = 'I saw you. Or not.';
$mail->send();
