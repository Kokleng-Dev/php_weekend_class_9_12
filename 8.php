<?php

// while(true){
//     echo "\nx to exit \n press 1 to create folder \n press 2 to create file";
//     $inputType = readline("\nInput type : ");
//     if($inputType == 'x'){
//         break;
//     }
//     else if($inputType == 1){
//         $check = readline("\n press d to delete \n press c to create : ");
//         if($check == 'd'){
//             $input = readline("\nInput your Folder name : ");
//             if(file_exists($input)){
//                 if(is_file($input)){
//                     unlink($input);
//                 } else {
//                     rmdir($input);
//                 }
//             }
//         } else {
//             $input = readline("\nInput your Folder name : ");
//             if(!file_exists($input)){
//                 mkdir($input);
//             }
//         }
       
//     } else{
//         $input = readline("\nInput your File name : ");
//         $files = explode(" ", $input);
//         foreach ($files as $key => $value) {
//             if(!file_exists($value)){
//                 touch($value);
//             }
//         }
//     }


// }

// var_dump(scandir("test//"));

// print_r(pathinfo('/test/1.html')["extension"]);