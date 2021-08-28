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


if (isset($_POST['btn-add-product'])) {
    $pname = $_POST['pname'];
    $pdescription = $_POST['pdescription'];
    $pprice = $_POST['pprice'];
    $pdiscount = $_POST['pdiscount'];
    $pbrand = $_POST['pbrand'];
    $uid = $_SESSION['id'];

    $query = "INSERT INTO `product` (name, 	description, image, price, discount, brand_id, uid)
            VALUES ('$pname', '$pdescription', 'asus.jpeg', $pprice, $pdiscount, $pbrand, $uid)";
    
    $conn->query($query);

    header("Location: ../?link=home");
}

if (isset($_POST['remove'])) {

    $id = $_POST['product_id'];

    $query = "DELETE FROM `product` WHERE id = $id";
    
    $conn->query($query);

    header("Location: ../?link=home");
}