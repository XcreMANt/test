<?php


namespace App\Models;


use App\Model;

class Author extends Model implements HasEmail
{
    const TABLE = 'authors';
    public $name;
    public $email;

    public function getEmail()
    {
        return $this->email;
    }
}