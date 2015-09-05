<?php namespace web\Controller;

use app\core\Controller;
use app\core\Router;

class Main extends Controller
{
    public function action_index()
    {
        $this->router->addRules('1');
        $this->router->addRules('1');
        $this->router->addRules('1')->run();
    }
}