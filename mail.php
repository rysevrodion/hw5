<?php

require 'vendor/autoload.php';

$transport = (new Swift_SmtpTransport('smtp.mail.ru', 465, 'ssl'))
    ->setUsername('rysevtest@mail.ru')
    ->setPassword('kK77CyddkHcfA6czrB0p')
;

$mailer = new Swift_Mailer($transport);

$message = (new Swift_Message('Test Subject'))
    ->setFrom(['rysevtest@mail.ru' => 'rysevtest@mail.ru'])
    ->setTo(['r.rysev@g.nsu.ru'])
    ->setBody('Test message using swiftmailer')
;

$result = $mailer->send($message);