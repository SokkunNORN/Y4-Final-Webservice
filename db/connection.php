<?php

$S_NAME = 'localhost';
$UNAME = 'root';
$PASS = '';
$DB_NAME = 'computer_shop';

$conn = new mysqli($S_NAME, $UNAME, $PASS, $DB_NAME);
    
if (!$conn) {
    die(mysqli_error($conn));
}

