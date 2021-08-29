<?php

session_start();

require('../db/connection.php');

if (isset($_POST['btn-logout'])) {
    session_destroy();
    header("Location: ../?link=account");
}

if (isset($_POST['l-btn-login'])) {

    $uname = $_POST['l-uname'];
    $pass = $_POST['l-pass'];

    $query = "SELECT * FROM `user` WHERE uname = '$uname' AND pass = '$pass'";

    $results = $conn->query($query);

    $row = mysqli_fetch_assoc($results);

    if ($row['uname'] == $uname && $row['pass'] == $pass) {
        $_SESSION['id'] = $row['id'];
        $_SESSION['uname'] = $row['uname'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['address'] = $row['address'];
        $_SESSION['city'] = $row['city'];
        $_SESSION['zip'] = $row['zip'];
        $_SESSION['state'] = $row['state'];
        $_SESSION['country'] = $row['country'];
        $_SESSION['cardNumber'] = $row['cardNumber'];
        $_SESSION['expiryMonth'] = $row['expiryMonth'];
        $_SESSION['expiryYear'] = $row['expiryYear'];
        $_SESSION['cvc'] = $row['cvc'];
        $_SESSION['role_id'] = $row['role_id'];
    }

    header("Location: ../?link=account");
}

if (isset($_POST['r-btn-register'])) {

    $isRegister = $_POST['is-seller'];
    $role_id = $isRegister == 'on' ? 2 : 1;
    $uname = $_POST['r-uname'];
    $pass = $_POST['r-pass'];
    $mail = $_POST['r-email'];
    $address = $_POST['r-address'];
    $city = $_POST['r-city'];
    $zip = $_POST['r-zip'];
    $state = $_POST['r-state'];
    $country = $_POST['r-country'];
    $cardNumber = $_POST['r-card-number'];
    $expiryMonth = $_POST['r-expiry-month'];
    $expiryYear = $_POST['r-expiry-year'];
    $cvc = $_POST['r-cvc'];

    $queryInsert = "INSERT INTO `user` 
            (uname, email, address, city, zip, state, country, cardNumber, expiryMonth, expiryYear, cvc, pass, role_id)
            VALUES ('$uname', '$mail', '$address', '$city', $zip, '$state', '$country', $cardNumber, $expiryMonth, $expiryYear, $cvc, '$pass', $role_id)"; 

    $insert = $conn->query($queryInsert);

    echo $insert;

    if ($insert) {
        $query = "SELECT * FROM `user` WHERE uname = '$uname' AND pass = '$pass'";

        $results = $conn->query($query);
    
        $row = mysqli_fetch_assoc($results);
    
        if ($row['uname'] == $uname && $row['pass'] == $pass) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['uname'] = $row['uname'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['address'] = $row['address'];
            $_SESSION['city'] = $row['city'];
            $_SESSION['zip'] = $row['zip'];
            $_SESSION['state'] = $row['state'];
            $_SESSION['country'] = $row['country'];
            $_SESSION['cardNumber'] = $row['cardNumber'];
            $_SESSION['expiryMonth'] = $row['expiryMonth'];
            $_SESSION['expiryYear'] = $row['expiryYear'];
            $_SESSION['cvc'] = $row['cvc'];
            $_SESSION['role_id'] = $row['role_id'];
        }
    }

    header("Location: ../?link=account");
}