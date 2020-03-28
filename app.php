<?php

require __DIR__.'/vendor/autoload.php';

use DiDemo\Mailer\SmtpMailer;
use DiDemo\FriendHarvester;

$dsn = 'sqlite:'.__DIR__.'/data/database.sqlite';
$pdo = new PDO($dsn);

class Registry
{
    static public  $pdo;
}
Registry::$pdo = $pdo;


$friendHarvester = new FriendHarvester($pdo);
$friendHarvester->emailFriends();


