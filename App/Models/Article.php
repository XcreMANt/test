<?php

namespace App\Models;

use App\Model;

class Article extends Model
{
    const TABLE = 'articles';

    public $title;
    public $author_id;
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

    /**
     * LAZY LOAD
     *
     * @param $k
     * @return null
     */
    public function __get($k)
    {
        switch ($k) {
            case 'author':
                return Author::findById($this->author_id);
                break;
            default:
                return null;
        }
    }

    public function __isset($k)
    {
        switch ($k) {
            case 'author':
                return !empty($this->author_id);
                break;
            default:
                return false;
        }
    }

//    public function getAuthor()
//    {
//        if(isset($this->author_id)) {
//            return Author::findById($this->author_id);
//        }
//
//        return false;
//    }

}
