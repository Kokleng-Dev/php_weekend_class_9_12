<?php

// $number = 10.1;

// echo "<h2>number : $number</h2>";
// echo "Ceil " . ceil($number) . "<br>";
// echo "Floor " . floor($number) . "<br>";
// echo "round " . round($number) . "<br>";

function bet($input, $items){
    if($input > count($items)){
        echo "\nwrong input, try again";
    } else {
        $rand = rand(0,count($items)-1);
        if($rand + 1 == $input){
            echo "\nyou are win , result is : " . $items[$input - 1]; 
        } else {
            echo "\nyou are lose";
        }
    }
}

$items = ["a","b","c","d","e"];

while(true){
    $input = readline("\nenter your item : ");
    $input2 = readline("\nenter your item : ");

    if($input == 'x' || $input2 == 'x'){
        break;
    }
    
    // bet input 1
    bet($input,$items);
    // bet input 2
    bet($input2,$items);
    
}