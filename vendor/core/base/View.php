<?php

namespace vendor\core\base;

/**
 * Description of View
 *
 */
class View {
     
    /**
     * текущий маршрут и параметры(controller, action, params)
     * @var array
     */
    public $route = [];
    
    /**
     * текущий вид
     * @var string
     */
    public $view;
    
    /**
     * текущий шаблон 
     * @var string
     */
    public $layout;
    
    public function __construct($route, $layout = '', $view = '' ) {
        $this->route = $route;
        $this->layout = $layout ?: LAYOUT;
        $this->view = $view;
    }
    
    public function render() {
        $file_view = APP . "/views{$this->route['controller']}/{$this->view}.php";
    }
}
