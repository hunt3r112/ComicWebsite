<div id="fade-mask">
    <div id="fade-mask-mask"></div>
    <div id="login-modal">
        <div class="modal-header">
            <div class="modal-title">
                <h1>Đăng nhập</h1>
            </div>
            <div class="modal-status">
                <h3 id="login-status"></h3>
            </div>
        </div>
        <button id="modal-close-button">X</button>
        <div class="modal-text">
            <form action="#" method="post" id="login-form" onsubmit="return false;">
                <div class="input-box">
                    <input type="text" id="login-form-account" name="account" min="6" max="50"
                           autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" tabindex="0"
                           placeholder="Tài khoản" value="">
                    <span class="input-box-border overline"></span>
                    <span class="input-box-border underline"></span>
                    <span class="input-box-border leftline"></span>
                    <span class="input-box-border rightline"></span>
                </div>
                <div class="input-box">
                    <input type="password" id="login-form-password" name="password" min="6" max="50"
                           autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" tabindex="0"
                           placeholder="Mật khẩu" value="">
                    <span class="input-box-border overline"></span>
                    <span class="input-box-border underline"></span>
                    <span class="input-box-border leftline"></span>
                    <span class="input-box-border rightline"></span>
                </div>
                <button type="submit" id="login-button" class="button-box" name="login" disabled="disabled" onclick=" checkUser();">Đăng nhập
                </button>
                <button type="button" id="register-button" class="button-box" name="register">Đăng ký tài khoản mới
                </button>
            </form>
            <?php
                if (!empty($_POST))     // hoặc if($_SERVER['REQUEST_METHOD'] == 'POST')
                {
                    require_once 'connect.php';
                    $account = $_POST['account'];
                    $password = $_POST['password'];
                    $user_select_query = "select * from user where UserAccount = '$account' and UserPassword = '$password'";
                    $num = mysqli_num_rows(mysqli_query($conn, $user_select_query));
                    if ($num === 1)
                    {
                        $user = mysqli_fetch_assoc(mysqli_query($conn,$user_select_query));
                        $_SESSION['account'] = $user['UserAccount'];
                    }
                }
            ?>
        </div>
    </div>
</div>
<div id="navigation-bar">
        <div id="home" class="nav-bar-button" >
            <a href="index.php">Trang chủ</a>
        </div>
        <div class="input-box" id="search-bar">
            <input type="text" name="search" value="" placeholder="Tìm kiếm" id="search-bar-value" onkeyup="showSearchResult(this.value)">
            <span class="input-box-border overline"></span>
            <span class="input-box-border underline"></span>
            <span class="input-box-border leftline"></span>
            <span class="input-box-border rightline"></span>
            <div id="search-result">
                <ul>

                </ul>
            </div>
        </div>
    <?php
        if(!isset($_SESSION['account'])) {  ?>
            <div id="user-section">
                <div id="login" class="nav-bar-button">
                    <p>Đăng nhập</p>
                </div>
                <div id="register" class="nav-bar-button">
                    <p>Đăng ký</p>
                </div>
            </div>
            <?php
        }
        else {
            ?>
            <div id="user-section">
                <div id="user-account" class="nav-bar-button">
                    <img id="user-image" src="UserImages/<?php echo $user['UserImage']; ?>" alt="">
                    <span><?php echo $user['UserAccount']; ?></span>
                    <ul id="user-option">
                        <li>
                            <a href="add-comic.php">Thêm truyện mới</a>
                        </li>
                        <li>
                            <a href="#">Quản lý truyện</a>
                        </li>
                        <li>
                            <a href="logout.php?url=<?php echo $_SERVER['REQUEST_URI']; ?>">Thoát</a>
                        </li>
                    </ul>
                </div>
            </div>
            <?php
        }
     ?>
    </div>
<script type="text/javascript" src="Js/ajax-request.js"></script>