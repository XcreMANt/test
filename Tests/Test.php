<?php

namespace Tests;

use App\Models\Article;
use App\Models\User;

class Test
{
    public function findByIdTest($id)
    {
        var_dump(Article::findById($id));
    }

    public function findAllTest()
    {
       var_dump(User::findAll());
    }

    public function findAllArticleTest()
    {
        var_dump(Article::findAll());
    }

    public function lastRecordsTest($count)
    {
        var_dump(Article::lastRecords($count));
    }
}
