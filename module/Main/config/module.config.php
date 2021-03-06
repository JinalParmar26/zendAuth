<?php

return array(
    'router' => array(
        'routes' => array(
            // Redirecting '/' to the home page
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Main\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),            
            'authenticate' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/authenticate',
                    'defaults' => array(
                        'controller'    => 'Main\Controller\Authentication',
                        'action'        => 'authenticate',
                    ),
                )
            ),
            'logout' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/logout',
                    'defaults' => array(
                        'controller'    => 'Main\Controller\Authentication',
                        'action'        => 'logout',
                    ),
                )
            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'factories' => array(
            'translator' => 'Zend\Mvc\Service\TranslatorServiceFactory',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Main\Controller\Index' => 'Main\Controller\IndexController',
            // Other controllers are created with factories
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            // Define a global template used to render smaller template in it
            'layout/layout'              => __DIR__ . '/../view/layout/layout.phtml',
            'error/403'                  => __DIR__ . '/../view/error/403.phtml',
            'error/404'                  => __DIR__ . '/../view/error/404.phtml',
            'error/index'                => __DIR__ . '/../view/error/index.phtml',
            'main/index/index'           => __DIR__ . '/../view/main/index/index.phtml',
            'main/index/phpinfo'         => __DIR__ . '/../view/main/index/phpinfo.phtml',
            'main/persistence/clients'   => __DIR__ . '/../view/main/persistence/clients.phtml',
            'main/persistence/client'    => __DIR__ . '/../view/main/persistence/client.phtml',
            'main/persistence/order'     => __DIR__ . '/../view/main/persistence/order.phtml',
            'main/login/widget'          => __DIR__ . '/../view/main/login/widget.phtml',
            'main/access/admin'          => __DIR__ . '/../view/main/access/admin.phtml',
            'main/access/user'           => __DIR__ . '/../view/main/access/user.phtml',
            'main/service/rad'           => __DIR__ . '/../view/main/service/rolladice.phtml',
        ),
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
