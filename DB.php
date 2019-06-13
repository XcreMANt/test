<?php

class DB
{

    public $dsn =  'mysql:host=mysql;port=3306;dbname=test';




    public $user = 'root';
    public $password = 'root';
    public $dbh;

    public function __construct()
    {
       $this->dbh = new PDO($this->dsn, $this->user, $this->password);
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
        return $sth->execute($data);

    }

    public function getData($sql)
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        $data = $sth->fetchAll();
        return $data;
    }
}
