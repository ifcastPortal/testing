<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
     //'smtp_host' => 'email-smtp.us-east-1.amazonaws.com', 
    // 'smtp_host' => 'mail.ifcast.co.in',
    'smtp_host' => 'smtp.gmail.com', 

    'smtp_port' => 465,
    // 'smtp_user' => 'AKIA4XJV73SEHGTYUY5G',
    // 'smtp_pass' => 'BGk0Z92w39fc+OABgHTZHQTgUf6VQZratfcNPsX2gzf2',

    'smtp_user' => 'career@ifcast.co.in', //change the email id because of email not sent to users on this email id
    'smtp_pass' => '0okMNji(8uhB',        //changed the password

    // 'smtp_user' => 'devifcast@gmail.com',
    // 'smtp_pass' => 'qjSb@!6=',

    'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
    'mailtype' => 'html', //plaintext 'text' mails or 'html'
    'smtp_timeout' => '7', //in seconds
    'charset' => 'iso-8859-1',
    'wordwrap' => TRUE,
    'validate' => 'FALSE',
    'dsn'=> 'FALSE'
);

