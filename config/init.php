<?php

//если режим разработки , то 1. Если режим пракшена то 0
define("DEBUG", 1);

//корень нашего сайта
define("ROOT", dirname(__DIR__));

//публичная папка
define("WWW", ROOT . '/public');

//Будет вести к папке нашего приложения
define("APP", ROOT . '/app');

//ядро
define("CORE", ROOT . '/vendor/ishop/core');

//библиотеки
define("LIBS", ROOT . '/vendor/ishop/core/libs');

//кеш
define("CACHE", ROOT . '/tmp/cache');

//файлы конфигурации
define("CONF", ROOT . '/config');

//шаблон нашего сайта по умолчанию
define("LAYOUT", 'default');


echo $app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
