<?php
error_reporting(-1);

use vendor\core\Router;

$query = rtrim(filter_input(INPUT_SERVER, 'QUERY_STRING'), '/');

define('WWW', __DIR__ ); //public
define('CORE', dirname(__DIR__). 'vendor/core'); //core
define('ROOTE', dirname(__DIR__)); //framework.loc
define('APP', dirname(__DIR__) . '/app'); //app
define('LAYOUT', 'default');//default template


require_once '../vendor/libs/function.php';

spl_autoload_register(function($class){
    $file = ROOTE . '/' . str_replace('\\', '/', $class) . ".php";
    if(is_file($file)){
        require_once $file;
    }
});

Router::add('^page/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$',['controller' => 'Page']);
Router::add('^page/(?P<alias>[a-z-]+)$',['controller' => 'Page', 'action' => 'view']);

//default rules
Router::add('^$',['controller' => 'Main', 'action'=>'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

Router::dispatch($query);

