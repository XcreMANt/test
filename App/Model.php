<?php

namespace App;

abstract class Model
{

    const TABLE = '';

    public static function findAll()
    {
        $db = Db::instance();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            static::class
        );
    }

    public static function findById($id)
    {
        $db = Db::instance();
        $res = $db->query(
            'SELECT * FROM ' . static::TABLE . ' where id=' . $id,
            static::class
        );
        return $res ?: false;
    }

    public static function lastRecords($count)
    {
        $db = Db::instance();
        $res = $db->query(
            'SELECT * FROM ' . static::TABLE . ' order by id desc limit '. $count,
            static::class
        );
        return $res ?: false;
    }

        public function isNew()
    {
        return empty($this->id);
    }

    public function insert()
    {
        if (!$this->isNew()) {
            return;
        }

        $columns = [];
        $values = [];
        foreach ($this as $k => $v) {
            if ('id' == $k) {
                continue;
            }
            $columns[] = $k;
            $values[':'.$k] = $v;
        }

        $sql = 'INSERT INTO ' . static::TABLE .
            '(' . implode(',', $columns) .
            ')VALUES(' . implode(',', array_keys($values)) . ')';
        $db = Db::instance();
        $db->execute($sql, $values);
        $res = static::lastRecords(1);
        return $res;
    }

}
