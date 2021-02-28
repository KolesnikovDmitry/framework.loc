<?php

//Front Controller-точка входа
require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/function.php';

new \ishop\App;

throw new Exception('Страница не найдена', 404);