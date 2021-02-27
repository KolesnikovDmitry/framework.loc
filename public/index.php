<?php
//Front Controller-точка входа

//строка запроса
$query = rtrim($_SERVER['QUERY_STRING'], "/");

//Выходим из текущей папки
require_once dirname(__DIR__) . '/config/init.php';

