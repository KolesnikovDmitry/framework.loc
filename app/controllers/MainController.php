<?php
namespace app\controllers;

use app\models\Main;

class MainController extends AppController{
    
    //public $layout = 'main';
    
    public function indexAction() {
        $model = new Main;
//        $res = $model->query("CREATE TABLE Staff (
//                                id INT,
//                                name VARCHAR(255) NOT NULL,
//                                position VARCHAR(30),
//                                birthday Date); ");
        $posts = $model->findAll();
        $title = "PAGE_TITLE";
        $this->set(compact('title', 'posts'));
    }
}
