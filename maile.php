<?php
require_once './vendor/autoload.php';

try {

// * Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
  ->setAuthMode('login')
  ->setUsername('alaebhmtwins@gmail.com')
  ->setPassword('fphgpthodqmzdybn');

// * Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// * Create a message
$message = (new Swift_Message('Test Subject'))
  ->setFrom(['alaebhmtwins@gmail.com' => 'Amee Covoiturage'])
  ->setTo(['cnltnt@knowledgemd.com', 'cnltnt@knowledgemd.com' => 'Alae Bhm'])
  ->setBody('Here is the message itself')
  ;

// * Send the message
$result = $mailer->send($message);

echo 'Email has been sent.';

echo $result;

}catch(Exception $e) {
    echo $e->getMessage();
}