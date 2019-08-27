<?php
/**
 * Zf2 Skeleton App
 *
 * @author     Daniel Wolkenhauer <hello@dw-labs.de>
 * @copyright  Copyright (c) 2012-2019 Daniel Wolkenhauer
 * @link       http://dw-labs.de
 * @version    2.0.0
 */

return array(

  'modules' => array(
    'Application',
    'ZendDeveloperTools',
  ),

  'module_listener_options' => array(
    
    'module_paths' => array(
      './module',
      './vendor',
    ),

    'config_glob_paths' => array(
      'config/autoload/{{,*.}global,{,*.}local}.php',
    ),

    // configuration cache.
    //'config_cache_enabled' => $booleanValue,
    //'config_cache_key' => $stringKey,
    //'module_map_cache_enabled' => $booleanValue,
    //'module_map_cache_key' => $stringKey,
    //'cache_dir' => $stringPath,
    //'check_dependencies' => true,
  ),

  // create an own service manager. May contain one or more child arrays.
  //'service_listener_options' => array(
  //  array(
  //    'service_manager' => $stringServiceManagerName,
  //    'config_key'      => $stringConfigKey,
  //    'interface'       => $stringOptionalInterface,
  //    'method'          => $stringRequiredMethodName,
  //  ),
  //),
  
  // Initial configuration with which to seed the ServiceManager.
  // Should be compatible with Zend\ServiceManager\Config.
  // 'service_manager' => array(),

);
