<?php


namespace App;

class Db
{

    use Singleton;

    protected $dbh;

    protected function __construct()
    {
        $this->dbh = new \PDO('mysql:host=mysql;dbname=test', 'root', 'root');
    }

    public function execute($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        return $res;
    }

    public function query($sql, $class)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        if (false !== $res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];
    }

}
