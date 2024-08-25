<?php

class Language{
    public function __construct(){
        echo "hello world" . "<br>";
    }
    public function __destruct(){
        echo "hi". "<br>";
    }

    public function greeting(){
        echo "greeting". "<br>";
    }
    public function guest(){
        echo "welcome" . "<br>";
    }
    public function getClassName(){
        return __Class__;
    }
}

$lang1 = new Language();

$lang1->greeting();
$lang1->guest();
$langClass = $lang1->getClassName();

$lang2 = new $langClass();
