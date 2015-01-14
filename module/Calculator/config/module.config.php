<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(
            'calculator_home' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/calculator/',
                    'defaults' => array(
                        'controller' => 'Calculator\Controller\Calculator',
                        'action'     => 'index',
                    ),
                ),
            ),
            'calculator_add' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/calculator/add/',
                    'defaults' => array(
                        'controller' => 'Calculator\Controller\Calculator',
                        'action'     => 'add',
                    ),
                ),
            ),
            'calculator_addDo' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/calculator/add-do/',
                    'defaults' => array(
                        'controller' => 'Calculator\Controller\Calculator',
                        'action'     => 'addDo',
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'invokables' => array(
            'Calculator\Model\Calculator' => 'Calculator\Model\CalculatorModel',
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Calculator\Controller\Index' => 'Calculator\Controller\IndexController',
        ),
        'factories' => array(
            'Calculator\Controller\Calculator' => 'Calculator\Controller\Factory\CalculatorFactory',
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'calculator/index/index'  => __DIR__ . '/../view/calculator/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
            'partial/form'            => __DIR__ . '/../view/calculator/partial/form.phtml',
            'partial/menu'            => __DIR__ . '/../view/calculator/partial/menu.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
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
