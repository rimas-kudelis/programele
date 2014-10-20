<?php

    return [
        'view_manager' => [
            'display_exceptions'       => true,
            'display_not_found_reason' => true,
            'not_found_template'       => 'error/default',
            'exception_template'       => 'error/default',
            'doctype'                  => 'HTML5',
            'layout'                   => 'layout/default',
            'template_map'             => [
                'layout/default' => __DIR__ . '/../src/Application/view/layout/default.phtml',
                'error/default'  => __DIR__ . '/../src/Application/view/error/default.phtml'
            ],
            'template_path_stack'      => [
                __DIR__ . '/../src/Application/view'
            ]
        ]
    ];