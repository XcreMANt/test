<?php

namespace Tests;

use App\Models\Article;
use App\Models\User;

class Test
{
    public function findByTest($id)
    {
        var_dump(User::findById($id));
    }

    public function findAllTest()
    {
       var_dump(User::findAll());
    }

    public function findAllArticleTest()
    {
        var_dump(Article::findAll());
    }
}
