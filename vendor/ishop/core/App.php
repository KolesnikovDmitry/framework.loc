<?php

namespace ishop;

/**
 * Description of App
 *
 * @author Slash
 */
class App
{

    //контейнер для нашего приложения
    public static $app;

    public function __construct()
    {
        //Получим строку запроса, обоезав концевой слэш
        $query = trim($_SERVER['QUERY_STRING'], "/");
        session_start();
        self::$app = Registry::instance();
        $this->getParams();
        new ErrorHandler();
        Router::dispath($query);
    }

    protected static function getParams()
    {
        $params = require_once CONF . '/params.php';
        if (!empty($params)) {
            foreach ($params as $param => $key) {
                self::$app->setProperty($param, $key);
            }
        }
    }

}
