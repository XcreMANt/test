<?php

namespace Models;

class Schedule
{
    protected $name;
    protected $departure;
    protected $arrival;

    /**
     * Schedule constructor.
     * @param $name
     * @param $departure
     * @param $arrival
     */
    public function __construct($name, $departure, $arrival)
    {
        $this->name = $name;
        $this->departure = $departure;
        $this->arrival = $arrival;
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

}