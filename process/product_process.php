<?php

require('../db/connection.php');

if (isset($_POST['action'])) {

    $id = $_POST['id'];
    $p_number = $_POST['p_number'];

    $query = "INSERT INTO `product_process` 
    (seller_id, pid, buyer_id, number_product, status_id)
    VALUES (2, $id, 1, $p_number, 2)";

    $conn->query($query);
}
