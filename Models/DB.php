<?php

namespace Models;
use PDO;

class DB
{

    public $dsn =  'mysql:host=mysql;port=3306;dbname=test';




    public $user = 'root';
    public $password = 'root';
    public $dbh;

    public function __construct($dsn, $user, $password)
    {
       $this->dbh = new PDO($dsn, $user, $password);
       $this->dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
//       var_dump($this->dbh);
    }

    public function execute($sql)
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute();
    }

    public function query($sql, $data)
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($data);
        return $sth->fetchAll();

    }

}
