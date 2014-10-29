<?php

    return [
        'modules'                 => [
            'Application',
            'Tests'
        ],
        'module_listener_options' => [
            'module_paths'      => [
                './module'
            ],
            'config_glob_paths' => [
                'config/autoload/{,*.}{global,local}.php'
            ]
        ]
    ];