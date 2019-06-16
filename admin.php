<?php

require __DIR__.'/autoload.php';

$db = new \Models\DB('mysql:host=mysql;port=3306;dbname=test', 'root', 'root');

$allData = [];
$data = $db->query('select * from articles where title=:title', [':title' => 'about']);
$articles = new \Models\ArticleList($data);
$allData['about'] = $articles->getAll();

$data = $db->query('select * from images where :param', [':param' => 1]);
$gallery = new \Models\Gallery($data);
$allData['gallery'] = $gallery->getAll();

$data = $db->query('select * from schedule where :param', [':param' => 1]);
$schedule = new \Models\SheduleList($data);
$allData['schedule'] = $schedule->getAll();

$view = new \Controllers\View();

$view->assign('admin', $allData);
$view->display(__DIR__.'/Views/admin.php');
