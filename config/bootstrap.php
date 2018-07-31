<?php
require_once __DIR__ . '/../vendor/autoload.php';

const APP_ENVIROMENT_VAR_NAME = 'APP_ENV';
session_start();
$enviroment = getenv(APP_ENVIROMENT_VAR_NAME) ;
$configSuffix = $enviroment ? "_$enviroment" : '';
$configPath = __DIR__ . sprintf('/../config/config%s.php', $configSuffix);

if (!file_exists($configPath) || !is_readable($configPath)) {
    throw new RuntimeException("Check enviroments variable");
}
$config = require($configPath);
$app = new \Slim\App($config);



// Set up dependencies
require  __DIR__ . '/container.php';

// Register middleware
require __DIR__ . '/middleware.php';

// Register routes
require __DIR__ . '/routes.php';

return $app;