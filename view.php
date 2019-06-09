<?php
class View
{
    protected $data;

    public function __construct()
    {
    }

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function display($template)
    {
        if(array_key_exists($template, $this->data)) {
            foreach($this->data[$template] as $template)
            echo $template;
        } else {
            echo ' display ключ не найден';
        }
//        var_dump($this->data[$template]);
    }

    public function render($template)
    {
        if(array_key_exists($template, $this->data)) {
            return $this->data[$template];
        }
        return ' render ключ не найден';
    }
}