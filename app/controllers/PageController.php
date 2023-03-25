<?php
namespace app\controllers;

class PageController extends AppController{
    
    public function viewAction() {
        $this->layout = 'default';
        $posts = \R::findAll('posts');
        $menu = $this->menu;
        $title = "View";
        $this->setMeta($post->title, $post->description, $post->keywords);
        //$this->setMeta('Главная',  'описание страницы', 'ключевики');
        $meta = $this->meta;
        $this->set(compact('title', 'posts', 'menu', 'meta'));
    }
}
