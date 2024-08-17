<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if($username == 'admin' && $password == 123){
    $_SESSION['auth'] = 1;
    $_SESSION['sms'] = "Login Successfully";

    header("Location: http://localhost/sunday_weekend/sessions/home/index.php");
}

?>
