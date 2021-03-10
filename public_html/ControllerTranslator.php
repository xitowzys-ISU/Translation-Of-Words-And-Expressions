<?php

class ControllerTranslator
{
    private $model;

    public function __construct()
    {
        $dict = require 'config/dictWords.php';

        $this->view = new View();
        $this->model = new Translator($dict);
    }

    public function translatorAction()
    {
        $result = $this->model->translate($_POST['sourceLang'], $_POST['translationLang'], $_POST['text']);
        if (!empty($result)) {
            echo '<h1>Перевод: ' . $result . '</h1>';
        } else {
            echo '<h1>Такого слова в словаре нету</h1>';
        }
    }
}
