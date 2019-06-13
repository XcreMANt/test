<?php

include __DIR__.'/view.php';
include __DIR__.'/guestbook.php';

$view = new View();
//$view->assign('qqq','www');
//$view->display('qqq');

//echo $view->render('qqq');

$gb = new GuestBook('db');
$view->assign('db', $gb->getData());

$view->display('db');

//$gb->append('uuuuuuuuuuuuuuuuu');
//$gb->save();

