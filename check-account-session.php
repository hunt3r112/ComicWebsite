<?php
/**
 * Created by PhpStorm.
 * User: Nam
 * Date: 1/3/2020
 * Time: 11:01 PM
 */
    session_start();
    require_once 'connect.php';
    if (isset($_SESSION['account']))
    {
        $account = $_SESSION['account'];
        $user_select_query = "select * from user where UserAccount = '$account'";
        $user = mysqli_fetch_assoc(mysqli_query($conn,$user_select_query));
    }
?>