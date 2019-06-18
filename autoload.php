<?php

spl_autoload_register('autoloader');
spl_autoload_extensions('.php');

function autoloader($path)
{
    $class = __DIR__.'/'.str_replace('\\', '/', $path).'.php';
    include $class;

}
