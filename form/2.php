<?php

// foreach ($_SERVER as $key => $value) {
//     echo $key . " : " . $value . "<br>";
// }

// if($_SERVER['REQUEST_METHOD'] == "POST"){
//     if (!filter_var($_POST['myemail'], FILTER_VALIDATE_EMAIL)) {
//         echo "Invalid email format";
//     } else {
//         echo "success";
//     }
// }


// var_dump(json_encode($_POST['myemail']));

// echo htmlspecialchars($_POST['myemail']);



if(isset($_FILES['image'])){
    foreach ($_FILES['image']['name'] as $index => $value) {
        $file_name = $_FILES['image']['name'][$index];
        // $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'][$index];
        // $file_type = $_FILES['image']['type'];
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

        $extensions = ['png'];
        if(in_array($file_ext,$extensions)=== false){
           echo "extension not allowed, please choose a JPEG or PNG file." . "<br>";
        } else {
            if(move_uploaded_file($file_tmp,"images/". time() . rand(100000000, 9999999) . $file_name)){
                echo "Success : " . $file_name . "<br>";
            }else{
                echo "File not uploaded";
            }
        }
    }

}



// print_r($_POST['phone']);