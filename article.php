<?php

require __DIR__ . '/autoload.php';
$db = \App\Db::instance();

$view = new \App\View();

$view->title = 'Мой крутой сайт!';
$view->articles = \App\Models\Article::findAll();

$view->display(__DIR__ . '/App/Views/articlenew.php');
