<?php

require __DIR__ . '/autoload.php';

$users = \App\Models\User::findAll();

//var_dump($users);

$test = new \Tests\Test();
//$test->findByIdTest(78);
//echo $test->findAllArticleTest();

$articles = \App\Models\Article::lastRecords(3);

//var_dump($articles);
//echo $articles[2]->text;

include __DIR__.'/App/Views/article.php';
