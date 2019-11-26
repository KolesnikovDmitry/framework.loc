<?php
class Router 
{
    /*
        Таблица маршрутов
        @var $array
    */
    protected static $routes = [];
    
    /*
        Текущий маршрутов
        $var $array
    */
    protected static $route = [];

    /*
        добавляет маршрут в таблицу маршрутов
        
        @param string $regexp регулярное выражение маршрута
        @param $array $route маршрут ([controller, action, params])
    */
    public static function add($regexp, $route = []) {
        self::$routes[$regexp] = $route;
    }
    /*
        возвращает таблицу маршрутов 
        @return array
    */
    public static function getRoutes() {
        return self::$routes;
    }
    /*
        ищет URL в таблице маршрутов
        @param string $url входящий URL
        @return boolen
    
    */
    public static function getRoute() {
        return self::$route;
    }
    
    public static function matchRoute($url) {
        foreach (self::$routes as $pattern => $route) {
            if (preg_match("#$pattern#i", $url, $matches)) {
                debug($matches);
                self::$route = $route;
                return true;
            }
        }
        return false;
    }
}
