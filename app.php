<?php

require __DIR__ . '/vendor/autoload.php';

use Pimple\Container;

$container = new Container();

require __DIR__ . '/app/config.php';
require __DIR__ . '/app/services.php';


//class Registry
//{
//    static public $pdo;
//}

//Registry::$pdo = $pdo;

//$friendHarvester = new FriendHarvester($pdo, [
//    'server'   => 'smtp.SendMoneyToStrangers.com',
//    'user'     => 'smtpuser',
//    'password' => 'smtppass',
//    'port'     => '465'
//]);

/** @var FriendHarvester $friendHarvester */
$friendHarvester = $container['friendHarvester'];
$friendHarvester->emailFriends();


