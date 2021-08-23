<?php
    require('./db/connection.php');

    $query = "SELECT product.* 
        FROM `product`, `brand`
        WHERE product.status_id = 1
        AND brand.id = product.brand_id
        AND brand.name LIKE 'Apple'";

    $results = $conn->query($query);
