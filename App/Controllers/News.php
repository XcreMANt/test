<?php

namespace App\Controllers;

class News extends BaseController
{

    protected function beforeAction()
    {
    }

    protected function actionIndex()
    {
        $this->view->title = 'Мой крутой сайт!';
        $this->view->news = \App\Models\Article::findAll();
        $this->view->display(__DIR__ . '/../Views/index.php');
    }

    protected function actionOne()
    {
        $id = (int)$_GET['id'];
        $this->view->article = \App\Models\Article::findById($id);
        if(!($this->view->article)) {
            throw new \App\Exceptions\Error404('Страница не найдена');
        }
        $this->view->display(__DIR__ . '/../Views/one.php');
    }
}
