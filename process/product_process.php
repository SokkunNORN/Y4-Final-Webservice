<?php

session_start();

require('../db/connection.php');

if (isset($_POST['action'])) {

    $pid = $_POST['id'];
    $p_number = $_POST['p_number'];
    $buyer_id = $_SESSION['id'];

    $query = "INSERT INTO `product_process` 
    (buyer_id, pid, number_product, status_id)
    VALUES ($buyer_id, $pid, $p_number, 2)";

    $conn->query($query);
}

if (isset($_POST['remove-product'])) {

    $pid = $_POST['product_id'];
    $buyer_id = $_SESSION['id'];

    $query = "DELETE FROM `product_process` 
    WHERE pid = $pid 
    AND buyer_id = $buyer_id";

    $conn->query($query);

    header("Location: ../?link=checkout");
}
