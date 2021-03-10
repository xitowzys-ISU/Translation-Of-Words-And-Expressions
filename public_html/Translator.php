<?php

class Translator
{
    private $dictWords;

    public function __construct($dictWords)
    {
        $this->dictWords = $dictWords;
    }

    public function changeLang($lang)
    {
        $this->selectedLang = $lang;
    }

    public function translate($sourceLang, $translateLang, $text)
    {
        if (in_array($text, $this->dictWords[$sourceLang])) {
            $key = array_search($text, $this->dictWords[$sourceLang]);
            return $this->dictWords[$translateLang][$key];
        } else {
            return "";
        }
    }
};
