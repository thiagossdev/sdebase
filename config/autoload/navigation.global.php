<?php

return array(
    'navigation' => array(
        'default' => array(
            array(
                'label' => _('Home'),
                'route' => 'home',
                'controller' => 'index',
                'action' => 'index'
            ),
            array(
                'label' => _('Sign out'),
                'route' => 'auth/signout',
                'resource' => 'TSS\Auth\Controller\Auth',
                'privilege' => 'signout',
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
        ),
    ),
);
