<?php

namespace Models;

class SheduleList
{
    protected $data = [];

    /**
     * SheduleList constructor.
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
            $ret[] = new Schedule($item['id'], $item['name'], $item['departure'], $item['arrival']);
        }
        return $ret;
    }
}
