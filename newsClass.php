<?php

require __DIR__.'/articleClass.php';

class News
{
    protected $data;
    protected $path;

    public function __construct($path)
    {
        $this->path = __DIR__.'/'.$path;

        if(file_exists($this->path)) {
            $this->data = file($this->path);
        }

    }

    public function getData()
    {
        if($this->data === []) {
            return null;
        }

        $ret = [];
        $article_id = 1;
        foreach ($this->data as $item) {
            $ret[] = new Article($article_id, $item);
            $article_id++;
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
