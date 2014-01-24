<?php

return array(
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view'
        )
    ),
    'router' => array(
        'routes' => array(
            'change_me' => array( // Cambiar change_me por cualquier clave de array 
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/e', // Cambiar default por cualquier ruta de URL
                    'defaults' => array(
                        'controller' => 'Ejemplo\Controller\Index', // Cambiar o agregar controller
                        'action' => 'index' // Cambiar o agregar action
                    )
                )
            )
        )
    ),
    'controllers' => array(
        'invokables' => array(
            'Ejemplo\Controller\Index' => 'Ejemplo\Controller\IndexController'
        )
    ),
    /*
    'service_manager' => array(
        'invokables' => array(
            'LoginService' => 'Ejemplo\Service\LoginService'
        )
    )    
    */    
);
