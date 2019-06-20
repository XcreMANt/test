<?php

namespace App\Models;

use App\Model;

class Article extends Model
{
    const TABLE = 'articles';

    public $title;
    public $author;
    public $text;

    public function getShortText()
    {
        $arr = explode(' ', $this->text);
        $i = 0;
        $short_arr = [];
//        var_dump($arr);
        while($i < 3 && $i < count($arr)) {
            $short_arr[] = $arr[$i];
            $i++;
        }

        $short_text = implode(' ', $short_arr);

        return $short_text;
    }

}
