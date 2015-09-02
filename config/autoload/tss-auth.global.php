<?php

/**
 * Coolcsn Zend Framework 2 Authorization Module
 *
 * @link https://github.com/coolcsn/CsnAuthorization for the canonical source repository
 * @copyright Copyright (c) 2005-2013 LightSoft 2005 Ltd. Bulgaria
 * @license https://github.com/coolcsn/CsnAuthorization/blob/master/LICENSE BSDLicense
 * @author Stoyan Cheresharov <stoyan@coolcsn.com>, Stoyan Revov <st.revov@gmail.com>
 */
return [
    'tss' => [
        'auth' => [
            'routes' => [
                'redirect' => [
                    'name' => 'home'
                ],
                'signin' => [
                    'name' => 'auth/signin'
                ],
                'authenticate' => [
                    'name' => 'auth/authenticate'
                ],
            ],

            'acl' => [
                'use_database_storage' => false,
                'default_role' => 'Guest',
                'roles' => [
                    'Guest' => null,
                    'Usuario' => ['Guest'],
                    'Cliente' => ['Usuario'],
                    'Funcionario' => ['Usuario'],
                    'Gerente' => ['Funcionario'],
                    'Admin' => ['Usuario'],
                ],
                'resources' => [
                    'allow' => [
                        'Application\Controller\Index' => [
                            '' => ['Usuario']
                        ],
                        'TSS\Auth\Controller\Auth' => [
                            'authenticate' => ['Guest'],
                            'signin' => ['Guest'],
                            'email-nova-senha' => ['Guest'],
                            'index' => ['Usuario'],
                            'mudar-senha' => ['Usuario'],
                            'nova-senha' => ['Guest'],
                            'perfil' => ['Usuario'],
                            'recuperar-senha' => ['Guest'],
                            'sair' => ['Usuario'],
                        ],
                    ],
                    'deny' => [
                        'Application\Controller\Conta' => [
                            'nova-senha' => ['Usuario'],
                            'email-nova-senha' => ['Usuario'],
                            'recuperar-senha' => ['Usuario'],
                        ],
                    ]
                ]
            ]

        ]
    ]
];
