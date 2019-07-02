<?php

require __DIR__ . '/autoload.php';

$controller = new \App\Controllers\AdminController();
$action = $_GET['act'] ?: 'AllNews';
$controller->action($action);

//$db = \App\Db::instance();
//
//$articles = \App\Models\Article::findAll();
//
//include __DIR__.'/App/Views/Admin/article.php';
//
//if(isset($_POST['del'])) {
//    foreach ($articles as $item) {
//        if($item->id == $_POST['id']) {
//            $item->delete();
//        }
//    }
//}
//
//if(isset($_POST['edit']) || isset($_POST['new'])) {
//    foreach ($articles as $item) {
//        if($item->id == $_POST['id']) {
//            $article = $item;
//        }
//    }
//
////    $article = new \App\Models\Article();
//    include __DIR__.'/App/Views/Admin/articleEdit.php';
//}
//
//if($_POST['table_name'] == 'article_edit') {
//    $article = new \App\Models\Article();
//    $article->id = $_POST['id'];
//    $article->title = $_POST['title'];
//    $article->author = $_POST['author'];
//    $article->text = $_POST['text'];
////    var_dump($article);
//    $article->save();
//}
////var_dump($_POST);
////var_dump($article);
