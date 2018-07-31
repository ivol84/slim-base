<?php

use Zend\Stdlib\ArrayUtils;

$config = require __DIR__ . '/config.php';
return ArrayUtils::merge($config, [
    'settings' => [
        'displayErrorDetails' => true,

        'logger' => [
            'name' => 'systemsoftcontract',
            'level' => 'DEBUG',
            'path' => __DIR__ . '/../logs/app_dev.log',
        ],
    ],
]);