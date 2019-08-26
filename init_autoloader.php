<?php
/**
 * Zf2 Skeleton App
 *
 * @author     Daniel Wolkenhauer <hello@dw-labs.de>
 * @copyright  Copyright (c) 2012-2019 Daniel Wolkenhauer
 * @link       http://dw-labs.de
 * @version    2.0.0
 */


// Composer autoloading
if (file_exists('vendor/autoload.php')) {
  $loader = include 'vendor/autoload.php';
}

if (!class_exists('Zend\Loader\AutoloaderFactory')) {
  throw new RuntimeException('Unable to load ZF2. Run `php composer.phar install` or define a ZF2_PATH environment variable.');
}
