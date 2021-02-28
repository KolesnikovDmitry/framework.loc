<?php

//если режим разработки , то 1. Если режим пракшена то 0
define("DEBUG", 0);

//корень нашего сайта
// /srv/www/htdocs/pechatoff
define("ROOT", dirname(__DIR__));

//публичная папка
// /srv/www/htdocs/pechatoff/public
define("WWW", ROOT . '/public');

//Будет вести к папке нашего приложения
// /srv/www/htdocs/pechatoff/app
define("APP", ROOT . '/app');

//ядро
// /srv/www/htdocs/pechatoff/vendor/ishop/core
define("CORE", ROOT . '/vendor/ishop/core');

//библиотеки
// /srv/www/htdocs/pechatoff/vendor/ishop/core/libs
define("LIBS", ROOT . '/vendor/ishop/core/libs');

//кеш
// /srv/www/htdocs/pechatoff/tmp/cache
define("CACHE", ROOT . '/tmp/cache');

//файлы конфигурации
// /srv/www/htdocs/pechatoff/config
define("CONF", ROOT . '/config');

//шаблон нашего сайта по умолчанию
// default
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

//путь к админке сайта
define("ADMIN", PATH . '/admin');

//подключим автозагрузчик
require_once ROOT . '/vendor/autoload.php';




