<?php
/**
 * Zf2 Skeleton App
 *
 * @author     Daniel Wolkenhauer <hello@dw-labs.de>
 * @copyright  Copyright (c) 2012-2019 Daniel Wolkenhauer
 * @link       http://dw-labs.de
 * @version    2.0.0
 */

namespace Application;

return array(

  'router' => array(
    'routes' => array(

      'home' => array(
        'type' => 'Zend\Mvc\Router\Http\Literal',
        'options' => array(
          'route'    => '/',
          'defaults' => array(
            'controller' => 'Application\Controller\Index',
            'action'     => 'index',
          ),
        ),
      ),

      'application' => array(
        'type'    => 'Literal',
        'options' => array(
          'route'    => '/application',
          'defaults' => array(
            '__NAMESPACE__' => 'Application\Controller',
            'controller'    => 'Index',
            'action'        => 'index',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => array(
          'default' => array(
            'type'    => 'Segment',
            'options' => array(
              'route'    => '/[:controller[/:action]]',
              'constraints' => array(
                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
              ),
              'defaults' => array(),
            ),
          ),
        ),
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
    'locale' => 'de_DE',
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
      'Application\Controller\Index' => Controller\IndexController::class
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
      'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
      'error/404'               => __DIR__ . '/../view/error/404.phtml',
      'error/index'             => __DIR__ . '/../view/error/index.phtml',
    ),
    'template_path_stack' => array(
      __DIR__ . '/../view',
    ),
  ),

  // routing für Konsolenanwednungen
  'console' => array(
    'router' => array(
      'routes' => array(
      ),
    ),
  ),
  
);
