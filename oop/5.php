<?php

Interface Shape{
    public function calArea($x);
}

class Circle implements Shape{
    public function calArea($x){
        echo $x * 2;
    }
}

class Rectangle implements Shape{
    public function calArea($x){
        echo $x * 5;
    }
}

$c = new Circle();
$c->calArea(5);
echo "<br>";
$r = new Rectangle();
$r->calArea(5);
