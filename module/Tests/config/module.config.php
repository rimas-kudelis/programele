<?php

    return [
        'controllers'  => [
            'invokables' => [
                'Tests\Controller\Index'    => 'Tests\Controller\IndexController',
                'Tests\Controller\Category' => 'Tests\Controller\CategoryController',
                'Tests\Controller\Question' => 'Tests\Controller\QuestionController',
                'Tests\Controller\Answer'   => 'Tests\Controller\AnswerController'
            ]
        ],
        'router'       => [
            'routes' => [
                'home' => [
                    'type'         => 'literal',
                    'options'      => [
                        'route'    => '/',
                        'defaults' => [
                            'controller' => 'Tests\Controller\Index',
                            'action'     => 'index'
                        ]
                    ],
                    'child_routes' => [
                        'category' => [
                            'type'    => 'segment',
                            'options' => [
                                'route'    => '/category[/:action]',
                                'defaults' => [
                                    'controller' => '',
                                    'action'     => 'index'
                                ]
                            ]
                        ],
                        'question' => [
                            'type'    => 'segment',
                            'options' => [
                                'route'    => '/question[/:action]',
                                'defaults' => [
                                    'controller' => '',
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