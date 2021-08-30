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
            AND buyer_id = $buyer_id
            AND status_id = 2";

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

if (isset($_POST['btn_clear_checkout'])) {
    $buyer_id = $_SESSION['id'];

    $query = "DELETE FROM `product_process` 
            WHERE buyer_id = $buyer_id
            AND status_id = 2";

    $conn->query($query);

    header("Location: ../?link=checkout");
}

if (isset($_POST['token'])) {
    $buyer_id = $_SESSION['id'];

    $query = "SELECT product.*, product.id as product_id, 
        product_process.*, 
        SUM(product_process.number_product) as 'p_total'
        FROM `product_process`,`product`
        WHERE product.id = product_process.pid
        AND product_process.status_id = 2
        AND product_process.buyer_id = $buyer_id
        GROUP BY product_process.pid";

    $results = $conn->query($query);
    $name= null;
    $total_amount=0;
    while ($row = mysqli_fetch_assoc($results)) {
        $name .= $row['name'] .', ';
        $total_amount += $row['price'] * $row['p_total'];
    }
    require_once '../vendor/autoload.php';

    \Stripe\Stripe::setApiKey('sk_test_51Hc3WOFDPuwTsMlm6FqTwLBqy5wMoKpLKkbKOEaNgMDN1X4QozIjJgZQbNL1IvcaMNUVDQR5i10BruwROUTr1HNK00cOXuij72');

    $customer = \Stripe\Customer::create(array(
        'email'   => $_SESSION['email'],
        'source'  => $_POST["token"],
        'name'   => $_SESSION['uname'],
        'address'  => array(
            'line1'   => $_SESSION['address'],
            'postal_code' => $_SESSION['zip'],
            'city'   => $_SESSION['city'],
            'state'   => $_SESSION['state'],
            'country'  => 'US'
        )
    ));
    $order_number = rand(100000, 999999);

    $charge = \Stripe\Charge::create(array(
        'customer'  => $customer->id,
        'amount'  => $total_amount *100,
        'currency'  => "USD",
        'description' => $name,
        'metadata'  => array(
            'order_id'  => $order_number
        )
    ));

    $response = $charge->jsonSerialize();

    if ($response["amount_refunded"] == 0 && empty($response["failure_code"]) && $response['paid'] == 1 && $response["captured"] == 1 && $response['status'] == 'succeeded') {
        $query = "UPDATE `product_process` 
            SET `status_id` = 3
            WHERE buyer_id = $buyer_id
            AND status_id = 2";

        $conn->query($query);
    }
    header("Location: ../?link=checkout");
}
