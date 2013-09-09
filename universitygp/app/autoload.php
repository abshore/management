<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var $loader ClassLoader
 */
$loader = require __DIR__.'/../vendor/autoload.php';
$loader->add('Knp\\Component'   , __DIR__.'/../vendor/knp-components/src');
$loader->add('Knp\\Bundle'       , __DIR__.'/../vendor/bundles');


AnnotationRegistry::registerLoader(array($loader, 'loadClass'));
if (false !== ini_get('xdebug.max_nesting_level')) {
    ini_set('xdebug.max_nesting_level', 500);
}
return $loader;
