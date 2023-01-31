<?php

namespace app\controllers;
use vendor\fw\core\base\Controller;

class Posts extends Controller{
    
 
    public function indexAction()
    {
        echo "Posts::Index";
    }

    public function testAction()
    {
        debug($this->route);
        echo "Posts::test";
    }
}
