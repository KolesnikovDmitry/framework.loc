<?php
$query = $_SERVER['QUERY_STRING'];

require_once "../vendor/libs/function.php";
require_once '../vendor/core/Router.php';

Router::add('posts/add', ['controller'=>'Posts', 'action'=>'add']);
Router::add('posts/', ['controller'=>'Posts', 'action'=>'index']);
Router::add(' ', ['controller'=>'Main', 'action'=>'index']);
debug(Router::getRoutes());