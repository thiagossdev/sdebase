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
            'config' => [
                'identityClass' => Application\Entity\User::class,
                'identityProperty' => 'username',
                'credentialClass' => Application\Entity\Credential::class,
                'credentialProperty' => 'value',
                'credentialIdentityProperty' => 'user',
                'credential_callable' => function (Application\Entity\User $user, Application\Entity\Credential $credential) {
                    if ($user->getId() == $credential->getUser()->getId() && $user->isActive()) {
                        return true;
                    } else {
                        return false;
                    }
                },
                'roleClass' => Application\Entity\Role::class,
                'roleDefault' => 2,
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
