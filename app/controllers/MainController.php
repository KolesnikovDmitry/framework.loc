<?php
namespace app\controllers;

use app\models\Main;
use vendor\core\App;

  class MainController extends AppController{
    
    //public $layout = 'main';
    
    public function indexAction() {
//        App::$app->getList();
        $model = new Main;
        $posts = \R::findAll('posts');
//        App::$app->cache->set('posts', $posts);
//        App::$app->test->go();
        $post = \R::findOne('posts', 'id = 1');
        $menu = $this->menu;
        $title = "DEFAULT";
        $this->setMeta($post->title, $post->description, $post->keywords);
        //$this->setMeta('Главная',  'описание страницы', 'ключевики');
        $meta = $this->meta;
        $this->set(compact('title', 'posts', 'menu', 'meta'));
    }
    
    public function testAction() {
        $this->layout = 'test';
        $posts = \R::findAll('posts');
        $menu = $this->menu;
        $title = "DEFAULT";
        //$this->setMeta($post->title, $post->description, $post->keywords);
        $this->setMeta('Главная',  'описание страницы', 'ключевики');
        $meta = $this->meta;
        $this->set(compact('title', 'posts', 'menu', 'meta'));
    }
    
    
}


