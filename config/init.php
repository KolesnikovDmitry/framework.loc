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

//http`://framework.loc/public/index.php
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";

//по шаблону вырежем из адресной строки index.php. Ищем любые символы, все кроме слеша, начиная с конца строки,
//замещая пустой строкой в переменной app_path
//"http`://framework.loc/public/" 
$app_path = preg_replace("#[^/]+$#", ' ', $app_path);

//вырежем public и получим url главной страницы
//http`://framework.loc/
$app_path = str_replace('/public/', ' ', $app_path);

//запишем этот url в константу
define("PATH", $app_path);



