<?php

require 'vendor\autoload.php';

require 'vendor\symfony\finder\Finder.php';

use Symfony\Component\Finder\Finder;

$finder = new Finder();
$finder->files()->in(__DIR__)->exclude('vendor');

$finder = new \Symfony\Component\Finder\Finder();

foreach ($finder as $file) {
    echo $file->getRealPath() . "\n";
}

$log = new Logger('Logger');
$log->pushHandler(new StreamHandler(__DIR__ . '/visits.log', Logger::INFO));

$log->info('Visit', array('ip' => $_SERVER['REMOTE_ADDR']))

/*
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('path/to/your.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');
*/
