<?php

require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('Logger');
$log->pushHandler(new StreamHandler(__DIR__ . '/visits.log', Logger::INFO));

$log->info('Visit', array('ip' => $_SERVER['REMOTE_ADDR'], 'url' => $_SERVER['REMOTE_URI']));
