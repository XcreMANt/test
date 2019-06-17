<?php

namespace Models;

class Schedule
{
    protected $name;
    protected $departure;
    protected $arrival;
    protected $id;

    /**
     * Schedule constructor.
     * @param $name
     * @param $departure
     * @param $arrival
     */
    public function __construct($id, $name, $departure, $arrival)
    {
        $this->id = $id;
        $this->name = $name;
        $this->departure = $departure;
        $this->arrival = $arrival;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * @param mixed $departure
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;
    }

    /**
     * @return mixed
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * @param mixed $arrival
     */
    public function setArrival($arrival)
    {
        $this->arrival = $arrival;
    }

    public function delete()
    {
        $db = new \Models\DB('mysql:host=mysql;port=3306;dbname=test', 'root', 'root');
        $db->query('delete from schedule where id=:id', [':id' => $this->id]);
    }

    public function add($data)
    {
        $db = new \Models\DB('mysql:host=mysql;port=3306;dbname=test', 'root', 'root');
        $db->query('insert into schedule (name, departure, avvival) values (:name, :departure, :arrival)',
            [':name' => $data['name'], 'departure' => $data['departure'], ':arrival' => $data['arrival']]);
    }
}