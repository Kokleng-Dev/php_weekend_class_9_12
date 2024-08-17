<?php

// false, null , 0 , underfine, ''

// $str = '';
// $condition = true;
// while($condition){ // true
   
//     $n = readline("Enter your string : ");

//     if($n == 'exit'){
//         $condition = false;
//         echo $str . "\n";
//     }
//     $str .= $n; // $str = str . n
// }


// $condition = true;
// $sum = 0;
// while($condition){

//     echo "------------ Calculator --------------\n";
//     echo "Press 001 to calculate sum of 2 number\n";
//     echo "Press 002 to exit the program !!!!\n";

//     $pattern = readline("Input code : ");

//     if($pattern == 001){
//         $n1 = readline("Input your number 1st : ");
//         $n2 = readline("Input your number 2rd : ");

//         $sum += ($n1 + $n2);
//     }else if($pattern == 002){
//         $condition = false;
//         echo "\n Total of sum all number : " . $sum; 
//     } else {
//         echo "\n Try Again !!! \n";
//     }
    
// }
// $str = '';
// for($i = 0; $i < 1; $i = $i){
//     $input = readline ('Enter your statement : ');
//     if($input == 'exit'){
//         $str .= "\n";
//         echo $str;
//         break;
//     }
//     $str .= $input . "\n";
// }

// for ($i=0; $i < 10 ; $i++) { 
//     if($i % 2 != 0){
//         continue;
//     } 
    
//     if($i % 4 == 0 && $i != 0){
//         break;
//     }

//     echo $i . "<br>";
// }



// $i = 0;
// do {
//    echo $i;
// }while($i);   

// 5 = 1+2+3+4+5
// 10 = 1+2+3+4+5+6+7+8+9+10

// while, do while


// void function no return type

// function greeting($name = 'seyha'){
//     echo "hello " . $name;
// }

// greeting();
// echo "<hr/>";
// greeting('Kakada');



// function fullname($fristName , $lastName = 'helo'){
//     echo $fristName . $lastName;
// }


// fullname('asda');


// function sumNumber($n1,$operator,$n2){
//     switch ($operator) {
//         case '+':
//             echo "Total $n1 $operator $n2 = " . ($n1 + $n2) . "<br>";
//             break;
//         case '-':
//             echo "Total $n1 $operator $n2 = " . ($n1 - $n2) . "<br>";
//             break;
//         case '*':
//             echo "Total $n1 $operator $n2 = " . ($n1 * $n2) . "<br>";
//             break;
//         case '/':
//             echo "Total $n1 $operator $n2 = " . ($n1 / $n2) . "<br>";
//             break;
//         default:
//             echo "wrong operator !!!";
//             break;
//     }
// }

// sumNumber(1,'+',2);
// sumNumber(5,'*',2);
// sumNumber(5,'/',2);
// sumNumber(5,'-',2);
// sumNumber(10,'/',2);

// function listStudents($lists){
//     foreach ($lists as $key => $name) {
//         echo $key . " : " . $name . "<br>";
//     }
// }

// $lists = ['name' => 'kokleng', 'age' => 25 ,'Phone' => "016855002"];

// listStudents($lists);


// function allStudents($students){
//     foreach ($students as $value) {
//         listStudents($value);
//         echo "<hr/>";
//     }
// }

// $students = [
//     ['name' => 'Bopha', 'age' => 25, 'Phone' => '01092919129'],
//     ['name' => 'Seyha', 'age' => 25, 'Phone' => '01092919129'],
// ];
// allStudents($students);

function handleListItems($arr){
    foreach ($arr as $key => $value) {
        echo $key + 1 . " : " . $value . "\n";
    }
    echo "\n";
}


$arr = [];
while(true){
    echo "\n ------------------- Item --------------------- \n";
    echo "Press l to list all items !!!\n";
    echo "Press i to Input !!!\n";
    echo "Press u to Update !!!\n";
    echo "Press d to Delete item !!!\n";
    echo "Press any key to exit the program !!!\n";
    echo "\n ------------------- --- --------------------- \n";

    $press = readline("Input your key : ");
    if($press == 'i'){
        $arr[count($arr)] = readline('Input your item : ');

        echo "\ninsert successfully \n";
        sleep(1);
        system('clear');
    } 
    else if($press == 'l'){
        system('clear');
        handleListItems($arr);
    } else if($press == 'u'){
        system('clear');
        handleListItems($arr);
        $updateItem = readline("Edit Item Number : ");
        $updateName = readline("Update Item Number " . $updateItem . "." . $arr[$updateItem-1] . " to : ");
        $arr[$updateItem - 1] = $updateName; 

        echo "\n Update successfully \n";
        sleep(1);
    }
    else if($press == 'd'){
        handleListItems($arr);
        $deleteItem = readline("Delete Item : ");
        $newItem = [];
        $j = 0;
        foreach ($arr as $index => $value) {
            if($index != $deleteItem - 1){  
                $newItem[$j] = $value;
                $j++;
            }
        }

        $arr = $newItem;

        echo "\n Delete successfully \n";
        sleep(1);
    }
    else {
        handleListItems($arr);
        break;
    }
}