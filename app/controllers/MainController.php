<?php
namespace app\controllers;

use app\models\Main;

class MainController extends AppController{
    
    //public $layout = 'main';
    
    public function indexAction() {
        $model = new Main;
        $posts = $model->findAll();
        $posts2 = $model->findAll();
        $title = "PAGE_TITLE";
        $this->set(compact('title', 'posts'));
    }
}
