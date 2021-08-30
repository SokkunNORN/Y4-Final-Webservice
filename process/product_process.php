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

    $query = "UPDATE `product_process` 
            SET `status_id` = 3
            WHERE buyer_id = $buyer_id
            AND status_id = 2";

    $conn->query($query);

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
        'amount'  => 1000 * 100,
        'currency'  => "USD",
        'description' => "it say about compoter shop",
        'metadata'  => array(
            'order_id'  => $order_number
        )
    ));
 
    $response = $charge->jsonSerialize();
 
    // if ($response["amount_refunded"] == 0 && empty($response["failure_code"]) && $response['paid'] == 1 && $response["captured"] == 1 && $response['status'] == 'succeeded') {
    //     $amount = $response["amount"] / 100;
 
    //     $order_data = array(
    //         'order_number'   => $order_number,
    //         'order_total_amount' => $amount,
    //         'transaction_id'  => $response["balance_transaction"],
            // $_SESSION['id'] 
            // $_SESSION['uname']  
            // $_SESSION['email']  
            // $_SESSION['address'] 
            // $_SESSION['city']  
            // $_SESSION['zip']  
            // $_SESSION['state'] 
            // $_SESSION['country']  
            // $_SESSION['cardNumber']  
            // $_SESSION['expiryMonth']  
            // $_SESSION['expiryYear']  
            // $_SESSION['cvc'] 
            // $_SESSION['role_id'] 
        // );
 
        //     $query = "
        //         INSERT INTO user 
        //             (order_number, order_total_amount, transaction_id, card_cvc, card_expiry_month, card_expiry_year, order_status, card_holder_number, email_address, customer_name, customer_address, customer_city, customer_pin, customer_state, customer_country) 
        //             VALUES (:order_number, :order_total_amount, :transaction_id, :card_cvc, :card_expiry_month, :card_expiry_year, :order_status, :card_holder_number, :email_address, :customer_name, :customer_address, :customer_city, :customer_pin, :customer_state, :customer_country)
        //         ";
    
        //     $statement = $connect->prepare($query);
            
        //     $statement->execute($order_data);


        header("Location: ../?link=checkout");
    // }
}