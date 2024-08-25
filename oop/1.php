<?php

// class Car{
//     private $x = 10;
//     public $y = 20;
//     public function greeting(){
//         echo "hello y : " . $this->x;
//     }
//     public function setX($newX){
//         $this->x = $newX;
//     }
// }

// $car1 = new Car();
// $car1->setX(5);
// echo $car1->greeting();
// echo "<br>";

// $car2  =  new Car();
// $car2->greeting();

// class Person{
//     private $name;
//     public function setName($name){
//         $this->name = $name;
//     }
//     public function displayName(){
//         echo $this->name . "<br>";
//     }
// }

// $person1 = new Person();

// $person1->setName('Bora');
// $person1->displayName();
// $person1->setName('Bora 123');
// $person1->displayName();



class Math{
    private $arr;
    private $i;
    public function data($arrayData){
        $this->arr = $arrayData;
    }
    public function sum(){
        $sumValue = 0;
        foreach ($this->arr as $index => $value) {
            $sumValue += $value;
        }
        return $sumValue;
    }
    public function findMaxNumber(){
        return max($this->arr);
    }
    public function findMinNumber(){
        return min($this->arr);
    }
    public function sumDouble(){
        if(!$this->i){
            $this->i++;
            return $this->sumDouble();
        } else {
            return $this->sum() * 2;
        }
    }
}

$cal1 = new Math();
$cal1->data([1,2,5,6,9,5,6,10,24,22]);
echo $cal1->sum();
echo "<br>";
echo $cal1->findMaxNumber();
echo "<br>";
echo $cal1->findMinNumber();
echo "<br>";
echo $cal1->sumDouble();

















?>
