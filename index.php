<?php

require __DIR__ . '/autoload.php';

$users = \App\Models\User::findAll();

//var_dump($users);

$test = new \Tests\Test();
//$test->findByTest(3);
//$test->findAllArticleTest();

$test->findAllTest();