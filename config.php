<?php

#=================================================================
#
#=================================================================
/*require_once '../vendors/Symfony/Component/ClassLoader/UniversalClassLoader.php';

use Symfony\Component\ClassLoader\UniversalClassLoader;

$loader = new UniversalClassLoader();
echo __DIR__;
// register namespaces and prefixes here - see below
$loader->registerNamespaces(array(
    'Mazatleca' => __DIR__.'/src/'
));
$loader->register();*/
/*function __autoload($class_name) {	
	$full=__DIR__.'/src/'.$class_name . '.php';	
    include $full;
}*/

define("APP_PATH","../src/mazatleca/");
define("MZ_TEMA","temas/naturalist/index.html.php");

define('HOST','localhost');
define('DB_NAME','mazatleca');
?>