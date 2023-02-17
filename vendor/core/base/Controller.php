<?php

namespace vendor\core\base;

abstract class Controller {
    
    
    /**
     * текущий маршрут и параметры(controller, action, params)
     * @var array
     */
    public $route = [];
    
    /**
     * вид
     * @var string
     */
    public $view;
    
    public function __construct($route) {
        $this->route = $route;
    }
}
