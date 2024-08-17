<?php

define('HOST_NAME', 'localhost');
define('USER_NAME', 'root');
define('PASSWORD', 'root');
define('DATABASE', 'myDB_weekend');

$mysql = new mysqli(HOST_NAME, USER_NAME, PASSWORD,DATABASE);

// Check connection
if ($mysql -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysql -> connect_error;
    exit();
}





?>
