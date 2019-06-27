<?php


namespace App;
use PDO;

class Db
{

    use Singleton;

    protected $dbh;

    protected function __construct()
    {
        $conf =Config::instance();
        $this->dbh = new \PDO('mysql:host='.$conf->data['host'].'; dbname='.$conf->data['dbname'], $conf->data['username'],$conf->data['password']);
        $this->dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    }

    public function execute($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        return $res;
    }

    public function query($sql, $params, $class)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        if (false !== $res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];
    }

    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }

}
