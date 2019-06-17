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

if(isset($_POST['del']) && isset($_POST['id'])) {
    foreach($allData['gallery'] as $image) {
        if($_POST['id'] == $image->getId()) {
            $image->delete();
//            header("Refresh:0");
        }
    }
}

if(isset($_POST['del'])) {
    dataDelete($allData[$_POST['table_name']], $_POST['id']);
}

if(isset($_POST['edit'])) {
    dataEdit($allData[$_POST['table_name']], $_POST['id'], $_POST['text_field']);
}

if(isset($_POST['add']) && ($_POST['table_name']) == 'schedule') {
    $arr = [];
    $arr['name'] = $_POST['sched_name'];
    $arr['departure'] = $_POST['departure'];
    $arr['arrival'] = $_POST['arrival'];

    scheduleAdd($allData[$_POST['table_name']], $arr);
}

function dataEdit($data, $id, $text)
{
    foreach ($data as $item) {
        if($id == $item->getId()) {
            $item->setText($text);
            header("Refresh:0");
        }
    }
}

function dataDelete($data, $id)
{
    foreach ($data as $item) {
        if($id == $item->getId()) {
            $item->delete();
            header("Refresh:0");
        }
    }
}

function scheduleAdd($data, $arr)
{
    $first = reset($data);
    $first->add($arr);
    header("Refresh:0");

}
