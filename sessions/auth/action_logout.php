<?php

session_start();

unset($_SESSION['auth']);

$_SESSION['sms'] = 'Logout Successfully';

header("Location: login.php");
?>
