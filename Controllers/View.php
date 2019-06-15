<?php

namespace Controllers;

class View
{
    protected $data = [];
//    protected $name;

    /**
     * @return mixed
     */
//    public function getName()
//    {
//        return $this->name;
//    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
        $this->name = $name;
    }

    public function render($template)
    {
        ob_start();

        foreach ($this->data as $key => $value) {
            $$key = $value;
        }
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function display($template)
    {
        echo $this->render($template);
    }

}
