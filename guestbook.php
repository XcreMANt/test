<?php
class GuestBook
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
        return $this->data;
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