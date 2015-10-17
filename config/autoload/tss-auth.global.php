<?php

return [
    'tss' => [
        'auth' => [
            'layout' => 'tss/auth/layout/default',
            'template' => [
                'signin' => 'tss/auth/signin',
                'signup' => 'tss/auth/signup',
            ],
            'routes' => [
                'redirect' => [
                    'name' => 'home'
                ],
                'authenticate' => [
                    'name' => 'auth/authenticate'
                ],
                'signin' => [
                    'name' => 'auth/signin'
                ],
                'signout' => [
                    'name' => 'auth/signout'
                ],
                'signup' => [
                    'name' => 'auth/signup'
                ],
            ],

            'acl' => [
                'use_database_storage' => false,
                'default_role' => 'Guest',
                'roles' => [
                    'Guest' => null,
                    'Member' => ['Guest'],
                    'Admin' => ['Member'],
                ],
                'resources' => [
                    'allow' => [
                        'Application\Controller\Account' => [
                            '' => ['Member']
                        ],
                        'Application\Controller\Index' => [
                            '' => ['Member']
                        ],
                        'Application\Controller\Chats' => [
                            '' => ['Member']
                        ],
                        'TSS\Auth\Controller\Auth' => [
                            'authenticate' => ['Guest'],
                            'signin' => ['Guest'],
                            'signout' => ['Guest'],
                            'signup' => ['Guest'],
                        ],
                    ],
                    'deny' => [
                        'TSS\Auth\Controller\Auth' => [
                            'signup' => ['Member'],
                        ],
                    ]
                ]
            ]

        ]
    ]
];
