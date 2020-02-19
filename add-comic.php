<?php
/**
 * Created by PhpStorm.
 * User: Nam
 * Date: 1/7/2020
 * Time: 12:04 AM
 */
    session_start();
    require_once 'connect.php';
    if (isset($_SESSION['account']))
    {
        $account = $_SESSION['account'];
        $user_select_query = "select * from user where UserAccount = '$account'";
        $user = mysqli_fetch_assoc(mysqli_query($conn,$user_select_query));
    }
    else
        header('location:index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Thêm mới truyện</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="Css/stylesheet.css">
</head>
<body id="container">
    <div id="content-wrapper">
        <div id="title-bar">
            <a href="index.php">Trang chủ</a> | <a href="#">Danh sách truyện đã đăng</a> | Thêm truyện mới
        </div>
        <div id="add-comic-form">
            <h2>Thêm truyện mới</h2>
            <div class="line"></div>
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="row-label"><span>Tên truyện</span></div>
                    <div class="row-content"><input type="text" name="comicName" placeholder="Tên truyện" id="comicName"></div>
                </div>
                <div class="row">
                    <div class="row-label"><span>Đường dẫn</span></div>
                    <div class="row-content"><input type="text" name="comicURL" id="comicURL" disabled="disabled">
                        <label for="comicURL" id="comicURLUpdate" style="padding-left: 20px; cursor: pointer; color: blue">Sửa</label>
                    </div>
                </div>
                <div class="row">
                    <div class="row-label"><span>Bìa truyện</span></div>
                    <div class="row-content"><label for="comicCover" class="custom-file-upload">
                            <strong>+</strong> Thêm bìa truyện
                        </label>
                        <input type="file" name="comicCover" placeholder="Bìa truyện" id="comicCover"></div>
                </div>
                <div class="row">
                    <div class="row-label"><span>Tên tác giả</span></div>
                    <div class="row-content"><input type="text" name="comicAuthor" placeholder="Nhập tên tác giả"
                                                    id="comicAuthor">
                        <div class="input-area">
                            <div class="tags-menu">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row-label"><span>Thể loại</span></div>
                    <div class="row-content"><input type="text" name="comicGenre" placeholder="Nhập thể loại"
                                                    id="comicGenre" data-role="tagsinput">
                        <div class="input-area">
                            <div class="tags-menu">

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
<script type="text/javascript" src="Js/add-comic.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

<script src="Js/typeahead.js/typeahead.bundle.min.js"></script>
<script src="Js/typeahead.js/bloodhound.min.js"></script>
<script src="Js/ajax-request.js"></script>
</html>
