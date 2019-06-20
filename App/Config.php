<?php


namespace App;


class Config
{
    use Singleton;

    public $data = [];

    /**
     * Config constructor.
     * @param $data
     */
    public function __construct()
    {
        $conf = file(__DIR__.'/../config');
        foreach($conf as $item) {
            list($k, $v ) = explode('=', $item);
            $this->data[$k] = $v;
        }
    }

}