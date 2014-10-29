<?php

    return [
        'controllers'  => [
            'invokables' => [
                'Tests\Controller\Index'    => 'Tests\Controller\IndexController',
                'Tests\Controller\Category' => 'Tests\Controller\CategoryController'
            ]
        ],
        'router'       => [
            'routes' => [
                'home' => [
                    'may_terminate' => true,
                    'type'          => 'literal',
                    'options'       => [
                        'route'    => '/',
                        'defaults' => [
                            'controller' => 'Tests\Controller\Index',
                            'action'     => 'index'
                        ]
                    ],
                    'child_routes'  => [
                        'category' => [
                            'may_terminate' => true,
                            'type'          => 'segment',
                            'options'       => [
                                'route'    => 'category[/:action]',
                                'defaults' => [
                                    'controller' => 'Tests\Controller\Category',
                                    'action'     => 'index'
                                ]
                            ]
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