<?php
/**
 * ZF App Skeleton
 *
 * @author     Daniel Wolkenhauer <hello@dw-labs.de>
 * @copyright  Copyright (c) 2012-2019 Daniel Wolkenhauer
 * @link       http://dw-labs.de
 * @version    2.0.0
 */

// This makes our life easier when dealing with paths. Everything is relative to the application root now.
chdir(dirname(__DIR__));

// Setup autoloading
require 'init_autoloader.php';

// Run the application!
Zend\Mvc\Application::init(require 'config/application.config.php')->run();
