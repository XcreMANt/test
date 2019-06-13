<?php

require __DIR__.'/dbrepo.php';

$data = $view->getData();
//var_dump($data);
//$view->assign();
$view->display(__DIR__.'/views/articledb.php');