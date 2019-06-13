<?php

include __DIR__.'/DB.php';
require __DIR__.'/view.php';

$req3 = 'select * from articles order by id desc';
$db = new DB();
$data = $db->getData($req3);
$view = new View();

require __DIR__.'/allnewsClass.php';
$news = new Allnews($data);


$inf = $news->getData();
$view->assign('article',$inf);
