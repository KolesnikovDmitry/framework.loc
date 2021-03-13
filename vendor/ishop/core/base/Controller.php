<?php

namespace ishop\base;

abstract class Controller {
    // массив с текущим маршрутом
    public $route;
    public $controller;
    public $view;
    public $model;
    public $prefix;
    public $layout;
    // обычные данные, которые будем передавать из контроллера в вид
    public $data = [];
    // метаданные
    public $meta = ['title' => '', 'desc' => '', 'keywords' => ''];
    
    public function __construct($route) {
        //сам целиком массив
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->model = $route['controller'];
        $this->view = $route['action'];
        // админский префикс, либо пустой префикс, если работаем не с админкой
        $this->prefix = $route['prefix'];
    }

    public function getView(){
        $viewObject = new View($this->route, $this->layout, $this->view, $this->meta);
        $viewObject->render($this->data);
    }

    public function set($data) {
        $this->data = $data;
    }
    public function setMeta($title = '', $desc = '', $keywords = '') {
        $this->meta['title'] = $title;
        $this->meta['desc'] = $desc;
        $this->meta['keywords'] = $keywords;
    }


}
