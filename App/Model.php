<?php

namespace App;

abstract class Model
{

    const TABLE = '';

    public static function findAll()
    {
        $db = Db::instance();
        $res = [];
        foreach($db->queryEach('SELECT * FROM ' . static::TABLE, static::class)
                as $elem) {
            $res[] = $elem;
        };
        return $res;
    }

    public static function findById($id)
    {
        $db = Db::instance();
        $resArr = $db->query(
            'SELECT * FROM ' . static::TABLE . ' where id=' . $id,
            static::class
        );

        $res = array_shift($resArr);

        return $res ?: false;
    }

    public static function lastRecords($count)
    {
        $db = Db::instance();
        $res = $db->query(
            'SELECT * FROM ' . static::TABLE . ' order by id desc limit ' . $count,
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
            $values[':' . $k] = $v;
        }

        $sql = 'INSERT INTO ' . static::TABLE .
            '(' . implode(',', $columns) .
            ')VALUES(' . implode(',', array_keys($values)) . ')';
        $db = Db::instance();
        $db->execute($sql, $values);
//        $res = static::lastRecords(1);
//        return $res;
        $db->lastInsertId();
    }

    public function update()
    {
        if ($this->isNew()) {
            return;
        }

        $set = [];
        $values = [];
        foreach ($this as $k => $v) {
            if ('id' == $k) {
                continue;
            }
            $set[] = $k . '=:' . $k;
            $values[':' . $k] = $v;
        }

        $sql = 'update ' . static::TABLE .
            ' set ' . implode(',', $set) .
            ' where id=' . $this->id;
        $db = Db::instance();
        $db->execute($sql, $values);
    }

    public function save()
    {
        if ($this->isNew()) {
            $this->insert();
            return 'inserted';
        } else {
            $this->update();
            return 'updated';
        }
    }

    public function delete()
    {
        $sql = 'delete from ' . static::TABLE .
            ' where id=' . $this->id;
        $db = Db::instance();
        $db->execute($sql);
    }
}
