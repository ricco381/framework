<?php namespace web\Controller;

use app\core\Controller;

class News extends Controller
{
    public function action_index()
    {
        $this->router->addRules('2');
    }
}