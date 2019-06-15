<?php

require __DIR__.'/autoload.php';

$db = new \Models\DB('mysql:host=mysql;port=3306;dbname=test', 'root', 'root');
$data = $db->query('select * from articles where title=:title', [':title' => 'about']);

$view = new \Controllers\View();

$view->assign('about', $data);
$view->display('about');
