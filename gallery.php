<?php

require __DIR__.'/autoload.php';

$db = new \Models\DB('mysql:host=mysql;port=3306;dbname=test', 'root', 'root');
$data = $db->query('select * from images where :param', [':param' => 1]);

$gallery = new \Models\Gallery($data);
$view = new \Controllers\View();

$view->assign('gallery', $gallery->getAll());
$view->display(__DIR__.'/Views/gallery.php');
