<?php

    return [
        'db' => [
            'driver'         => 'pdo_mysql',
            'host'           => 'localhost',
            'driver_options' => [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
            ]
        ]
    ];