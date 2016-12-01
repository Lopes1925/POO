<?php

require_once './vendor/autoload.php';

$mail = Swift_Message::newInstance();

$mail->setFrom("elaborata@elaborata.com.br");
$mail->setTo("aluno@atrasado.com.br");
$mail->setSubject("Cuidado pra não atrasar");
$mail->setBody("Cuidado ou não vai ter diploma, nem pagando chopp, ou tvz assim");

$server = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl');
$server->setUsername('13runo.lopes@gmail.com');
$server->setPassword('4598521423');

$carteiro = Swift_Mailer::newInstance($server);
$carteiro->send($mail);



//https://sendgrid.com/
//https://getcomposer.org/
//http://swiftmailer.org/
//https://packagist.org/
//https://designpatternsphp.readthedocs.io/en/latest/
//http://br.phptherightway.com/
//http://php.net/
//https://novatec.com.br/
//https://www.casadocodigo.com.br/