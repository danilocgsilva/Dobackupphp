<?php

require '../vendor/autoload.php';

$valuesArray = $secure->hostValues();

\Danilocgsilva\Backupphp::backup(
    $valuesArray['host'],
    $valuesArray['user'],
    $valuesArray['dbname'],
    $valuesArray['pass']
);
