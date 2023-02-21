<?php

namespace vendor\core;

class Router {
    /**
    *  Таблица маршрутов
    *  @var array
    */
    protected static $routes = [];

    /**
     * Текущий маршрут
     * @var array
     * 
     */
    protected static $route = [];

    /**
     * добавляет маршрут в таблицу маршрутов
     * @param string $regexp регулярное выражение маршрута
     * @param array $route маршрут ([controller, action, params])
     */
    public static function add($regexp, $route = []) {
        self::$routes[$regexp] = $route;
    }
    
    /**
     * возвращает таблицу маршрутов
     * @return array
     */
    public static function getRoutes() {
        return self::$routes;
    }
    
    /**
     * текущий маршрут
     * @var array
     */
    public static function getRoute() {
        return self::$route;
    }
    
    /**
     * ищет совпадение с маршрутом
     * @param type $url входящий URL 
     * @return boolean
     */
    public static function matchRoute($url) {
        foreach (self::$routes as $pattern => $route) {
            if (preg_match("#$pattern#i", strval($url), $matches)) {
                foreach($matches as $key => $value) {
                    if (is_string($key)) {
                        $route[$key] = $value;
                    }
                }
                if (!isset($route['action'])) {
                    $route['action'] = 'index';
                }
                $route['controller'] = self::upperCamelCase($route['controller']); 
                self::$route = $route;
                return true;
            } 
        }
        return false;
    }
    
    /**
     * Перенаправляет URL по корректному маршруту
     * @param string $url входящий url
     * @return void
     */
    public static function dispatch($url) {
        $url = self::removeQueryString($url);
        if (self::matchRoute ($url)) {
            $controller = 'app\controllers\\' . self::$route['controller'];
            if(class_exists($controller)){
                $cObj = new $controller(self::$route);
                $action = self::lowerCamelCase(self::$route['action']) . "Action";
                if(method_exists($cObj, $action )) {
                    $cObj->$action();
                    $cObj->getView();
                } else {
                    echo "Метод <b>$controller::$action</b> не найден";
                }
            } else {
                echo "Контроллер <b>$controller</b> не найден";
            }
        } else {
            http_response_code(404);
            include '404.html';
        } 
    }
    
    protected static function upperCamelCase($name) {
        return $name = str_replace(' ', '', ucwords(str_replace('-', ' ',$name)));
    }
    
    protected static function lowerCamelCase($name) {
        return lcfirst(self::upperCamelCase($name));
    }
    
    protected static function removeQueryString($url) {
        if($url) {
            $params = explode('&', $url, 2);
            if (false === strpos($params[0], '=')) {
                return rtrim($params[0], '/');
            } else {
                return '';  
            }
        }
    }
    
}

