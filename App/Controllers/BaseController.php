<?php


namespace App\Controllers;


use App\View;

abstract class BaseController
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function action($action, $args = '')
    {
        $methodName = 'action' . $action;
        $this->beforeAction();
        return $this->$methodName($args);
    }

    abstract protected function beforeAction();
}
