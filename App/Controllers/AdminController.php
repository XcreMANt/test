<?php


namespace App\Controllers;


class AdminController extends BaseController
{
    protected function actionAllNews()
    {
        $this->view->title = 'Управление статьями';
        $this->view->news = \App\Models\Article::findAll();
        $this->view->display(__DIR__ . '/../Views/index.php');
    }

    protected  function actionEdit()
    {
        var_dump($_SERVER['REQUEST_URI']);
    }

    protected function actionSave()
    {
        var_dump($_SERVER['REQUEST_URI']);
    }

    protected function beforeAction()
    {
    }
}
