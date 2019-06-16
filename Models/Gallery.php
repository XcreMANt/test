<?php

namespace Models;

class Gallery
{
    protected $data = [];

    /**
     * Gallery constructor.
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
            $ret[] = new Image($item['name'], $item['path']);
        }
        return $ret;
    }
}