<?php
$query = rtrim($_SERVER['QUERY_STRING'], "/");

require '../vendor/core/Router.php';
require '../vendor/libs/function.php';


Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

debug(Router::getRoutes());

Router::dispath($query);