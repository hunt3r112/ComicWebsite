<?php
/**
 * Created by PhpStorm.
 * User: Nam
 * Date: 1/6/2020
 * Time: 10:52 PM
 */
    session_start();
    setcookie('account','',time() + (365 * 24 * 60 * 60));
    unset($_SESSION['account']);
    $url = $_GET['url'];
    header("Location: $url");
?>