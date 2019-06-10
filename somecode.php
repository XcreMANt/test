<?php
require __DIR__.'/view.php';
$news = new News('db');
$view = new View();
$data = $news->getData();
