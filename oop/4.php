<?php

abstract class Host{

}

abstract class DB{
    abstract protected function index();
    abstract public function insert();
    abstract public function update();
    abstract public function delete();
    protected $connection = 'localhost';
}

abstract class Product extends DB{
    abstract public function index();
    abstract public function insert();
    abstract public function update();
    abstract public function delete();
}
abstract class User extends DB{
    abstract public function index();
    abstract public function insert();
    abstract public function update();
    abstract public function delete();
}



Interface A{
    public function setA();
}
Interface AA{
    public function setAA();
}

class B extends Product implements A,AA{
    public function setA(){

    }
    public function setAA(){

    }
    public function insert(){

    }
    public function update(){

    }
    public function index(){

    }
    public function delete(){

    }
}

$x = new B();
