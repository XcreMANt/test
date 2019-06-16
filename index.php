<?php

require __DIR__.'/autoload.php';

$db = new \Models\DB('mysql:host=mysql;port=3306;dbname=test', 'root', 'root');
$data = $db->query('select * from articles where title=:title', [':title' => 'about']);

$articles = new \Models\ArticleList($data);
$view = new \Controllers\View();


$view->assign('articles', $articles->getAll());
$view->display(__DIR__.'/Views/article.php');
