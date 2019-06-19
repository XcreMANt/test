<?php

require __DIR__ . '/autoload.php';

if(isset($_GET['id'])) {

    $articles = \App\Models\Article::findById($_GET['id']);

    include __DIR__.'/App/Views/article.php';
}
