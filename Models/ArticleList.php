<?php

namespace Models;

class ArticleList
{
    protected $data = [];

    /**
     * Articles constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getAll()
    {
        $ret = [];
        foreach ($this->data as $item) {
            $ret[] = new Article($item['id'], $item['title'], $item['author'], $item['text']);
        }
        return $ret;
    }

}