<?php

namespace App;

abstract class Model
{

    const TABLE = '';

    public static function findAll()
    {
        $db = new Db();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            static::class
        );
    }

    public static function findById($id)
    {
        $db = new Db();
        $res = $db->query(
            'SELECT * FROM ' . static::TABLE . ' where id=' . $id,
            static::class
        );
        return $res ?: false;
    }

}