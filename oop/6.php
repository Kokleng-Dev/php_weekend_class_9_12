<?php

class MyClass {
    static function host(){
        return 10;
    }
}
class MyClassA {
    static function host(){
        return 10;
    }
}

class A {
    public function greeting(int $text, MyClassA $classObject){
        echo $text + $classObject::host();
    }
}

$a = new A();
$a->greeting('10', new MyClass());
