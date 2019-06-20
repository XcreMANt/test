<?php

require __DIR__ . '/autoload.php';
$db = \App\Config::instance();

//$users = \App\Models\User::findAll();

//var_dump(\App\Models\User::asd());
//
//$users[0]->setName('Фрол');
//var_dump($users);


//$test = new \Tests\Test();
//$test->findByIdTest(78);
//echo $test->findAllArticleTest();

//$articles = \App\Models\Article::lastRecords(3);

//var_dump($articles);
//echo $articles[2]->text;

$user = new \App\Models\User();
$user->name = 'Vasya';
$user->email = 'v@pupkin.ru';
$id = $user->insert();
//var_dump($id);

//include __DIR__.'/App/Views/article.php';
