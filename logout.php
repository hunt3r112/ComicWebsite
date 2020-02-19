<?php
/**
 * Created by PhpStorm.
 * User: Nam
 * Date: 1/6/2020
 * Time: 10:52 PM
 */
    session_start();
    session_destroy ();
    $url = $_GET['url'];
    header("Location: $url");
?>