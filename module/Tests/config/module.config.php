<?php

    return [
        'controllers'  => [
            'invokables' => [
                'Tests\Controller\Index' => 'Tests\Controller\IndexController'
            ]
        ],
        'router'       => [
            'routes' => [
                'home' => [
                    'type'    => 'literal',
                    'options' => [
                        'route'    => '/',
                        'defaults' => [
                            'controller' => 'Tests\Controller\Index',
                            'action'     => 'index'
                        ]
                    ]
                ]
            ]
        ],
        'view_manager' => [
            'template_path_stack' => [
                __DIR__ . '/../src/Tests/view'
            ]
        ]
    ];