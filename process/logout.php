<?php

session_start();

if (isset($_POST['btn-logout'])) {
    session_destroy();
    header("Location: ../?link=account");
}