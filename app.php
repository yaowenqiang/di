<?php

require __DIR__ . '/vendor/autoload.php';

use DiDemo\FriendHarvester;
use DiDemo\Mailer\SmtpMailer;

$dsn = 'sqlite:' . __DIR__ . '/data/database.sqlite';
$pdo = new PDO($dsn);

class Registry
{
    static public $pdo;
}

Registry::$pdo = $pdo;

//$friendHarvester = new FriendHarvester($pdo, [
//    'server'   => 'smtp.SendMoneyToStrangers.com',
//    'user'     => 'smtpuser',
//    'password' => 'smtppass',
//    'port'     => '465'
//]);
$mailer = new SmtpMailer(
'smtp.SendMoneyToStrangers.com',
'smtpuser',
'smtppass',
'465'
);

$friendHarvester = new FriendHarvester($pdo, $mailer);
$friendHarvester->emailFriends();


