<?php

require __DIR__.'/articledbClass.php';

class Allnews
{
    protected $data;


    public function __construct($data)
    {
        $this->data = $data;

    }

    public function getData()
    {
        if($this->data === []) {
            return null;
        }

        $ret = [];
        foreach ($this->data as $item) {
            $ret[] = new ArticleDB($item);
          }

        return $ret;
    }

    public function append($text)
    {
        $this->data[] = "\n".$text;
    }

    public function save()
    {
        if($this->data === []) {
            return null;
        }
        file_put_contents($this->path, $this->data);
    }
}
