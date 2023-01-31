<?php

namespace app\controllers;
use vendor\fw\core\base\Controller;

class Page extends Controller{
    
    public function viewAction() {
        debug($this->route);
        echo "Page::view";
    }
}
