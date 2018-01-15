<?php

require '../vendor/autoload.php';

$valuesArray = $secure->hostValues();

$folder_to_write = getcwd() . DIRECTORY_SEPARATOR . 'backupfiles';

\Danilocgsilva\Backupphp::backup(
    $valuesArray['host'],
    $valuesArray['user'],
    $valuesArray['dbname'],
    $valuesArray['pass'],
    $folder_to_write
);
