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
                foreach ($matches as $key=>$value){
                    if (is_string($key)){
                        $route[$key] = $value;
                    }
                }
                if (!isset($route['action'])) {
                    $route['action'] = 'index';
                }
                self::$route = $route;
                return true;
            }
        }
        return false;
    }

    public static function dispath($url){
        if (self::matchRoute($url)){
            $controller = self::$route['controller'];
            if (class_exists($controller)){
                echo 'Ok';
            } else {
                echo "Контроллер <b>$controller</b> не найден";
            }
        } else {
            http_response_code(404);
            include '404.html';
        }
    }
}
