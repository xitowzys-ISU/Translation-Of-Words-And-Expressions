<?php

require 'lib/Dev.php';
require 'config/config.php';

spl_autoload_register(function ($class){
    $path = str_replace('\\', '/', $class . '.php');
    if (file_exists($path))
    {
        require $path;
    }
});

$controller = new ControllerTranslator();
$view = new View();

if(!empty($_POST))
{
    $controller->translatorAction();
}

$data = [
    '{TITLE}' => 'Переводчик'
];

$view->render('body', $data);