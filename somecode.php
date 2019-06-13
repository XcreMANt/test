<?php
require __DIR__.'/newsClass.php';
require __DIR__.'/view.php';
$news = new News('db');
$view = new View();

$inf = $news->getData();
$view->assign('article',$inf);
