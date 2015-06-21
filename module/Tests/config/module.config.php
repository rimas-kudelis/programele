<?php

    return [
        'controllers'  => [
            'invokables' => [
                'Tests\Controller\Index'    => 'Tests\Controller\IndexController',
                'Tests\Controller\Category' => 'Tests\Controller\CategoryController',
                'Tests\Controller\Answer' => 'Tests\Controller\AnswerController',
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
                        ],
                        'answer' => [
                            'may_terminate' => true,
                            'type'          => 'segment',
                            'options'       => [
                                'route'    => 'answer[/:action]',
                                'defaults' => [
                                    'controller' => 'Tests\Controller\Answer',
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