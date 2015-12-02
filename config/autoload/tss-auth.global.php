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
                    'name' => 'tss\auth/authenticate'
                ],
                'confirm-email' => [
                    'name' => 'tss\auth/confirm-email'
                ],
                'signin' => [
                    'name' => 'tss\auth/signin'
                ],
                'signout' => [
                    'name' => 'tss\auth/signout'
                ],
                'signup' => [
                    'name' => 'tss\auth/signup'
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
                'identityEmail' => 'email',
                'identityActive' => false,
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
                        'Application\Controller\Index' => [
                            '' => ['Member']
                        ],
                        'TSS\Auth\Controller\Account' => [
                            '' => ['Member'],
                        ],
                        'TSS\Auth\Controller\Auth' => [
                            'authenticate' => ['Guest'],
                            'confirm-email' => ['Guest'],
                            'signin' => ['Guest'],
                            'signout' => ['Guest'],
                            'signup' => ['Guest'],
                        ],
                        'TSS\Auth\Menu' => [
                            'account' => ['Member']
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
