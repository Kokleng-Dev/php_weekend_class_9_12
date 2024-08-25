<?php
class Family{
    protected $father = "ABC";
    public function __construct($fatherName){
        $this->father = $fatherName;
    }
}

class Children extends Family{
    public function __construct($name){
        Parent::__construct($name);
    }
    final function ChildrenGreeting(){
        echo "hello";
    }
    protected $age = 50;
}

class kid extends Children {
    public function __construct($childName){
        Parent::__construct($childName);
    }
}

// $x = new kid('koko');
// $x->ChildrenGreeting();



// class DB{
//     public static $tableName = '123';
//     static function table($name){
//         self::$tableName = $name;
//     }
// }

// $x = new DB();
// $x::table('products');

// echo DB::$tableName;



function incrementX(){
    static $x = 10;
    echo $x . "<br>";

    $x++;
}

incrementX();
incrementX();
incrementX();
incrementX();
