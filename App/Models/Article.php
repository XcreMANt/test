<?php

namespace App\Models;

use App\Model;

class Article extends Model
{
    const TABLE = 'articles';

    public $title;
    public $author;
    public $text;

    /**
     * Article constructor.
     * @param $title
     * @param $author
     * @param $text
     */
//    public function __construct($title, $author, $text)
//    {
//        $this->title = $title;
//        $this->author = $author;
//        $this->text = $text;
//    }

}
