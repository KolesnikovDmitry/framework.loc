<?php


namespace app\controllers;

use ishop\App;

class MainController extends AppController
{
    //public $layout = 'test';
    public function  indexAction() {
        //$this->layout='test';
        $this->setMeta(App::$app->getProperty('shop_name'), 'фото', 'photo');
    }
}