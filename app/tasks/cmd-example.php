<?php

// Define constants
define('APPLICATION_START', microtime(true));
define('APPLICATION_ENV', 'local');
define('APPLICATION_TYPE', 'cron');

// Set custom PHP options
date_default_timezone_set('UTC');

try {

    // Load vendors
    require_once __DIR__ . '/../../vendor/autoload.php';

    // Get the app instance, init, and process request
    $app = Rf\Core\Application\ApplicationCron::getInstance();
    $app->setConfigurationFile(dirname(dirname(__FILE__)) . '/config/config.php');
    $app->init();

    echo 'Hello world!' . PHP_EOL;

} catch (\Exception $e) {

    echo $e->getMessage() . PHP_EOL;
    die;

} catch (\Error $e) {

    echo $e->getMessage() . PHP_EOL;
    die;

}
