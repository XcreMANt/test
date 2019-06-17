<?php

namespace Models;

class Image
{
    protected $name;
    protected $path;
    protected $id;

    /**
     * Image constructor.
     * @param $name
     * @param $path
     */
    public function __construct($id, $name, $path)
    {
        $this->id = $id;
        $this->name = $name;
        $this->path = $path;
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
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function delete()
    {
        $db = new \Models\DB('mysql:host=mysql;port=3306;dbname=test', 'root', 'root');
        $db->query('delete from images where id=:id', [':id' => $this->id]);
    }
}