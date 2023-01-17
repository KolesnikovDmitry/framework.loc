<?php
$query = $_SERVER['QUERY_STRING'];

require_once "../vendor/libs/function.php";
require_once '../vendor/core/Router.php';

Router::add('post/add', ['controller'=>'Posts', 'action'=>'add']);

print_r(Router::getRoutes());