<?php

return array(
    'navigation' => array(
        'default' => array(
            array(
                'label' => 'Início',
                'route' => 'application',
                'controller' => 'index',
                'action' => 'index'
            ),

            array(
                'label' => 'Vendas <b class="caret"></b>',
                'uri' => '#',
                'attribs' => array('data-toggle' => 'dropdown'),
                'wrapClass' => 'dropdown',
                'class' => 'dropdown-toggle',
                'ulClass' => 'dropdown-menu',
                'resource' => 'Application\Controller\Vendas',
                'privilege' => 'index',
                'pages' => array(
                    array(
                        'label' => 'Estoque',
                        'uri' => '',
                        'wrapClass' => 'dropdown-header',
                        'resource' => 'Application\Controller\Produtos',
                        'privilege' => 'index',
                    ),
                    array(
                        'label' => 'Entrada e Saída',
                        'route' => 'application',
                        'controller' => 'fluxos',
                        'action' => 'registrar',
                        'resource' => 'Application\Controller\Fluxos',
                        'privilege' => 'registrar',
                    ),

                    array(
                        'uri' => '',
                        'wrapClass' => 'divider',
                        'resource' => 'Application\Controller\Clientes',
                        'privilege' => 'index',
                    ),
                    array(
                        'label' => 'Cadastros',
                        'uri' => '',
                        'wrapClass' => 'dropdown-header',
                        'resource' => 'Application\Controller\Clientes',
                        'privilege' => 'index',
                    ),
                    array(
                        'label' => 'Categorias',
                        'route' => 'application',
                        'controller' => 'categorias',
                        'resource' => 'Application\Controller\Categorias',
                        'privilege' => 'index',
                    ),
                    array(
                        'label' => 'Clientes',
                        'route' => 'application',
                        'controller' => 'clientes',
                        'resource' => 'Application\Controller\Clientes',
                        'privilege' => 'index',
                    ),
                    array(
                        'label' => 'Fabricantes',
                        'route' => 'application',
                        'controller' => 'fabricantes',
                        'resource' => 'Application\Controller\Fabricantes',
                        'privilege' => 'index',
                    ),
                    array(
                        'label' => 'Fornecedores',
                        'route' => 'application',
                        'controller' => 'fornecedores',
                        'resource' => 'Application\Controller\Fornecedores',
                        'privilege' => 'index',
                    ),
                    array(
                        'label' => 'Produtos',
                        'route' => 'application',
                        'controller' => 'produtos',
                        'resource' => 'Application\Controller\Produtos',
                        'privilege' => 'index',
                    ),
                ),
            ),

            array(
                'label' => 'Administrativo <b class="caret"></b>',
                'uri' => '#',
                'attribs' => array('data-toggle' => 'dropdown'),
                'wrapClass' => 'dropdown',
                'class' => 'dropdown-toggle',
                'ulClass' => 'dropdown-menu',
                'resource' => 'Application\Controller\Administrativo',
                'privilege' => 'index',
                'pages' => array(
                    array(
                        'label' => 'Funcionários',
                        'route' => 'application',
                        'controller' => 'funcionarios',
                        'resource' => 'Application\Controller\Funcionarios',
                        'privilege' => 'index',
                    ),
                ),
            ),

            array(
                'label' => '<span class="fa fa-user fa-lg"></span> <b class="caret"></b>',
                'uri' => '#',
                'attribs' => array('data-toggle' => 'dropdown'),
                'wrapClass' => 'dropdown',
                'class' => 'dropdown-toggle',
                'ulClass' => 'dropdown-menu',
                'resource' => 'Application\Controller\Conta',
                'privilege' => 'index',
                'pages' => array(
                        array(
                            'label' => '<i class="fa fa-user fa-fw"></i> Perfil',
                            'route' => 'application',
                            'controller' => 'conta',
                            'action' => 'perfil',
                            'resource' => 'Application\Controller\Conta',
                            'privilege' => 'perfil',
                        ),
                        array(
                            'label' => '<i class="fa fa-sign-out fa-fw"></i> Sair',
                            'route' => 'home/sair',
                            'controller' => 'conta',
                            'resource' => 'Application\Controller\Conta',
                            'privilege' => 'sair',
                        ),
                    ),
            ),
        ),
        
        'default2' => array(
            array(
                'label' => 'Inicio',
                'route' => 'application',
                'controller' => 'index',
                'action' => 'index'
            ),
            array(
                'label' => 'Caixa  <b class="caret"></b>',
                'route' => 'application',
                'controller' => 'caixas',
                'attribs' => array('data-toggle' => 'dropdown'),
                'wrapClass' => 'dropdown',
                'class' => 'dropdown-toggle',
                'pages' =>
                    array(
                        array(
                            'label' => 'Abrir',
                            'route' => 'application',
                            'controller' => 'caixas',
                            'pagesContainerClass' => 'dropdown-menu',
                            'resource' => 'Application\Controller\Caixas',
                            'action' => 'abrircaixa'
                        ),
                        array(
                            'label' => 'Fechar',
                            'route' => 'application',
                            'controller' => 'caixas',
                            'pagesContainerClass' => 'dropdown-menu',
                            'resource' => 'Application\Controller\Caixas',
                            'action' => 'fecharcaixa'
                        ),
                    ),
            ),

            
            array(
                'label' => 'Clientes',
                'route' => 'application',
                'controller' => 'clientes',
            ),

            array(
                'label' => 'Estoque  <b class="caret"></b>',
                'route' => 'application',
                'controller' => 'estoque',
                'attribs' => array('data-toggle' => 'dropdown'),
                'wrapClass' => 'dropdown',
                'class' => 'dropdown-toggle',
                'pages' =>
                    array(
                        array(
                            'label' => 'Produtos',
                            'route' => 'application',
                            'controller' => 'produtos',
                            'pagesContainerClass' => 'dropdown-menu',
                            'resource' => 'Application\Controller\Produtos',
                        ),
                        array(
                            'label' => 'Fabricantes',
                            'route' => 'application',
                            'controller' => 'fabricantes',
                            'pagesContainerClass' => 'dropdown-menu',
                            'resource' => 'Application\Controller\Fabricantes',
                        ),
                        array(
                            'label' => 'Fornecedores',
                            'route' => 'application',
                            'controller' => 'fornecedores',
                            'pagesContainerClass' => 'dropdown-menu',
                            'resource' => 'Application\Controller\Fornecedores',
                        ),
                    ),
            ),

        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
            'menu' => 'Application\Navigation\Service\Default2NavigationFactory',
        ),
    ),
);
