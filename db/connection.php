<?php

$S_NAME = 'localhost';
$UNAME = 'root';
$PASS = '';
$DB_NAME = 'computer_shop';

$conn = mysqli_connect($S_NAME, $UNAME, $PASS, $DB_NAME);
    
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// define('DB_USER', 'root');
// define('DB_PASSWORD', '');
// define('DB_DATABASE', 'computer_shop');
// define('DB_SERVER', 'localhost');
