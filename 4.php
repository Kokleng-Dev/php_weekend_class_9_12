<?php

// array index
// $arr = array('hello',123);
// $arr = [];
// $arr[0] = 1;
// $arr[1] = 2;
// $arr[2] = 3;
// $arr[3] = 4;
// $arr[100] = 4;
// print_r($arr);


// Associative array
$arr = array(
    'name' => 'bopha',
    'age' => 26
);
// $arr = [
//     'name' => 'bopha', 
//     'age' => 26
// ];

// $arr['phone'] = '019291931';
// $arr[4] = 'hello';
// $arr[0] = 'hello world';

// print_r($arr);

//Multidimensional array

// $arr = [
//  /* 0 */   [1,2,3,4,5],
// /* 1 */   [2,5,6,7,8, 'hello', ['welcome','168']],
// /* 2 */ [
//     'name' => 'dalin',
//     'age' => 22,
//     'info' => [
//         'school' => 2020,
//         'major' => 'IT',
//         'subject' => ['c','c++','php']
//     ]
// ]
// ];

// print_r($arr[2]['info']['subject'][2]);



// $arrs = [
//     '0' => ['hello'],
//     'key' => [
//         '1' => 'world',
//         'welcome' => 'Good morning !!!',
//         ['Good afternoon','hi' => 'finish him !!!']
//     ],
//     [
//         'major' => ['subject1' => 'PHP', 'Python']
//     ]
// ];
// print_r($arrs['0'][0]);
/* 
Example : => hello => $arrs['0'][0]
  hello, world, good morning, good afternoon, finish him !!! 
  PHP, python
*/



// for loop
// $i++ = $i + 1

// for($i = 0; $i < 3; $i++){
//     echo $i ;
//     echo "<br>";
// }

/* 
step 1
    $i = 0; work only first time
    condition ? $i < 3 <=> 0 < 3 ? true
    work
step 2
    $i++ => $i = 1
    condition ? true
    work

step 3


*/


// $arr = [1,2,3,4,5];

// for($i = 0; $i < 5; $i++){
//     echo $arr[$i] . "<br>";
// }

// $arr = [
//     'name' => 'bopha', 
//     'age' => 25, 
//     'address' => "phnom penh"
// ];
// $a = [1,2,3,4,6,'hello'];

// foreach ($a as $k => $value) {
//     echo $k . "<br>";
// }

// $arr = [
//     ['hello','bopha', 123],
//     ['welcome','book', 167]
// ];

// foreach ($arr as $key => $value) {
//     for($i=0; $i < count($value); $i++){
//         echo $value[$i];
//     }

//     echo "<br>";
// }

// 0 - 1 - 2 => 3
// count(arr) = 3
$arr = ['hello','hi','good morning'];

// for($i = 0; $i < count($arr); $i++){
//     echo $arr[$i] . "<br>";
// }
$items = ['php','html','css','python','mysql'];
// 0 : php
// 1 : html
// 2 : css
// 3 : python
// 4 : mysql 

/*
  arr[0]
  arr[1] 
  arr[2]
*/


/*
  input n : 50
  1 + 2 + 3 + ...  + 50 = ?
 
*/

$n = readline('input n : ');
echo "total = 6 \n";