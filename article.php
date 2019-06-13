<?php

require __DIR__.'/somecode.php';

$data = $view->getData();
//var_dump($data);
//$view->assign();
$view->display(__DIR__.'/views/article.php');