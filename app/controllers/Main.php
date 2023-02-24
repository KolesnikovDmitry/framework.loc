<?php
namespace app\controllers;


class Main extends App{
    
    public $layout = 'main';
    
    public function indexAction() {
       // $this->layout = false;
    $this->layout = 'default';
       //$this->view = 'test';
        $name = "Ande";
        $hi = "hello";
        $color = [
          $white = "Белый",
          $black = "Черный",
        ];
        $this->set(compact('name', 'hi', 'color'));
    }
}
