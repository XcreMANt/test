<?php


namespace App\Controllers;


use App\Model;

class AdminDataTable
{
    protected $models = [];
    protected $func = [];

    /**
     * AdminDataTable constructor.
     * @param array $models
     * @param array $func
     */
    public function __construct(Model $models, array $func)
    {
        $this->models = $models;
        $this->func = $func;
    }

    public function render()
    {
        $res = [];
        
    }

}