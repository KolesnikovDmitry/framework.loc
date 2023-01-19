<?php
$query = rtrim($_SERVER['QUERY_STRING'], '/') ;

require_once "../vendor/libs/function.php";
require_once '../vendor/core/Router.php';

// Router::add('posts/add', ['controller'=>'Posts', 'action'=>'add']);
// Router::add('posts', ['controller'=>'Posts', 'action'=>'index']);
// Router::add('', ['controller'=>'Main', 'action'=>'index']);

Router::add('^$', ['controller'=>'Main', 'action'=>'index']);
Router::add('([a-z-]+)/([a-z-]+)');


debug(Router::getRoutes());

if(Router::matchRoute($query)) {
    debug(Router::getRoute());
} else {
    echo "404";
}
