<?php
$aParts = array_reverse(explode('.', $_SERVER['HTTP_HOST']));

$sPath = dirname($_SERVER['SCRIPT_FILENAME'], 3);

echo  $sPath . '/index.php' . PHP_EOL;

require_once $sPath . '/index.php';
