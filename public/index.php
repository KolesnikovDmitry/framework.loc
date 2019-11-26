<?php
$query = rtrim($_SERVER['QUERY_STRING'], "/");

require '../vendor/core/Router.php';
require '../vendor/libs/function.php';


// Router::add('posts/add', ['controller' => 'Posts', 'action' => 'add']);
// Router::add('posts', ['controller' => 'Posts', 'action' => 'index']);
// Router::add('', ['controller' => 'Main', 'action' => 'index']);

Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('([a-z-]+)/([a-z-]+)');

debug(Router::getRoutes());

if (Router::matchRoute($query)) {
    debug(Router::getRoute());
} else {
     echo '404';
}