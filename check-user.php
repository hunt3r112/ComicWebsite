<?php
/**
 * Created by PhpStorm.
 * User: Nam
 * Date: 2/10/2020
 * Time: 9:32 PM
 */
    require_once 'connect.php';
    $account = $_GET['account'];
    $password = $_GET['password'];
    $account_select_query = "select * from user where UserAccount = '$account'";
    $account_num = mysqli_num_rows(mysqli_query($conn,$account_select_query));
    if($account_num === 0)
        echo 'wrongAccount';
    else{
        $user_select_query = "select * from user where UserAccount = '$account' and UserPassword = '$password'";
        $user_num = mysqli_num_rows(mysqli_query($conn, $user_select_query));
        if($user_num === 0)
            echo 'wrongPassword';
    }
?>