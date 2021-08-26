<?php

$conn = new PDO("mysql:host=localhost;dbname=computer_shop", "root", "");
    
if (!$conn) {
    die(mysqli_error($conn));
}

