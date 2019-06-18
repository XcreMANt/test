<?php

namespace Controllers;

class View
{
    protected $data = [];

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
//        $this->name = $name;
    }

    public function render($template)
    {

        ob_start();
        extract($this->data, EXTR_OVERWRITE);
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function display($template)
    {
//        extract($this->data, EXTR_OVERWRITE);
//        include $template;
        echo $this->render($template);
    }

}
