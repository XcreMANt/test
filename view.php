<?php
class View
{
    protected $data;
    protected $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    public function __construct()
    {
    }

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
        $this->name = $name;
    }

    public function display($template)
    {
        $data = $this->getData();
        $name = $this->getName();
        include $template;

//        if(array_key_exists($template, $this->data)) {
//            echo $this->data[$template];
////            foreach($this->data[$template] as $template)
////            echo $template;
//        } else {
//            echo ' display ключ не найден';
//        }
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
