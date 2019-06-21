<?php

require __DIR__ . '/autoload.php';

$db = \App\Db::instance();

$articles = \App\Models\Article::findAll();

include __DIR__.'/App/Views/Admin/article.php';

if(isset($_POST['del'])) {
    foreach ($articles as $item) {
        if($item->id == $_POST['id']) {
            $item->delete();
        }
    }
}

