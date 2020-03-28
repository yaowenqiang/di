<?php

use DiDemo\FriendHarvester;
use DiDemo\Mailer\SmtpMailer;

$container['mailer'] = function ($c)
{
    return new SmtpMailer(
        $c['smtp.server'],
        $c['smtp.user'],
        $c['smtp.password'],
        $c['smtp.port'],
    );
};
$container['pdo'] = function ($c) {
    return new PDO($c['pdo.dsn']);
};

$container['friendHarvester'] = function ($c) {
    return new FriendHarvester($c['pdo'], $c['mailer']);
};
