<?php
/**
 * Created by PhpStorm.
 * User: Nam
 * Date: 3/1/2020
 * Time: 1:54 AM
 */
$id_news = 1;

// Tên chức năng
$module_name = 'tintuc';

// Khởi tạo tên session là chuỗi gồm tên chức năng và id bài viết, mục đích tránh trùng ID với những chức năng khác, bạn có thể thêm một giá trị nào đó, để chắc chắn chuỗi này không bao giờ trùng với mỗi chuỗi nào khác.
$session_name = $module_name . '_' . $id_news;

// Lấy giá trị session.
$check_view = $_SESSION[$session_name];
if( empty( $check_view ) )
{
    // Gán giá trị session
    $_SESSION[$session_name] = 1;
    // Thực hiện cập nhật lượt xem, cộng dồn thêm 1
    $sql = 'UPDATE table_tintuc SET viewcount=viewcount+1 WHERE id=' . $id_news;
}
?>