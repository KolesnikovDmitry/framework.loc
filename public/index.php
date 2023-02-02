<?php

error_reporting(-1);

use fw\core\Router;

$query = rtrim($_SERVER['QUERY_STRING'], '/');


require_once "../vendor/autoload.php";
require_once "../vendor/libs/function.php";


define('WWW', __DIR__);
define('CORE', dirname(__DIR__) . '/vendor/core');
define('ROOT', dirname(__DIR__));
define('APP', dirname(__DIR__) . '/app');


spl_autoload_register(function($class){
    $file = ROOT . '/' . str_replace('\\', '/', $class) . '.php';
    if(file_exists($file)) {
        require_once $file;
    }
});
Router::add('^page/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)?$', ['controller'=>'Page']);
Router::add('^page/(?P<alias>[a-z-]+)?$', ['controller'=>'Page', 'action'=>'view']);

//default routes
Router::add('^$', ['controller'=>'Main', 'action'=>'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

debug(Router::getRoutes());

Router::dispatch($query);