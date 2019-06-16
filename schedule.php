<?php

require __DIR__.'/autoload.php';

$db = new \Models\DB('mysql:host=mysql;port=3306;dbname=test', 'root', 'root');
$data = $db->query('select * from schedule where :param', [':param' => 1]);

$schedule = new \Models\SheduleList($data);
$view = new \Controllers\View();

$view->assign('schedule', $schedule->getAll());
$view->display(__DIR__.'/Views/schedule.php');
