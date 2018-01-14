<?php

require '../vendor/autoload.php';

$secure = new danilocgsilva\dobackupphp\IndexSecure();
$secure->secure();

if ($secure->api) {
    include 'api/default.php';
    return;
}

require 'pages/home.php';
