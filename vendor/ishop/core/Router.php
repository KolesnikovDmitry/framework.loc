<?php
// Класс маршрутизатор
namespace ishop;


class Router
{
    //таблица маршрутов
    protected static $routes = [];
    protected static $route = [];

    //данный метод, будет записывать правила в таблицу маршрутов
    public static function add($regexp, $route = [])
    {
        self::$routes[$regexp] = $route;
    }

    public static function getRoutes()
    {
        return self::$routes;
    }

    public static function getRoute()
    {
        return self::$route;
    }

    public static function dispath($url)
    {
        if (self::matchRoute($url)) {
            echo "OK";
        } else {
            echo "NO";
        }

    }

    public static function matchRoute($url)
    {
        return false;
    }

}
