<?php
    include 'check-account-session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Css/stylesheet.css">
    <title>Đọc truyện tranh trực tuyến</title>
</head>
<body id="container">
    <?php
        include "navigation-bar.php";
    ?>
    <div id="content-wrapper">
<!--        <div id="header"></div>-->
        <?php
            include 'slide.php';
        ?>
        <div id="main-wrapper">
            <div id="left-col">
                <div class="section-header">
                    <h2 class="section-name new-comic-section">Truyện mới cập nhật</h2>
                </div>
                <div id="left-col-content">
                    <?php
                        require_once 'connect.php';
                        $page = 1;
                        $limit = 10;
                        $arr_list = mysqli_query($conn,'select ComicID from comic');
                        $total_record = mysqli_num_rows($arr_list);
                        $total_page = ceil($total_record/$limit);
                        if(isset($_GET["page"]))
                            $page = $_GET["page"];
                        if($page<1) $page=1;
                        if($page>$total_page) $page=$total_page;
                        $start=($page-1)*$limit;
                        $item_select_query = "select * from comic order by LastUpdated desc limit $start,$limit";
                        $item_result = mysqli_query($conn, $item_select_query);
                        while($items = mysqli_fetch_assoc($item_result))
                        {
                    ?>
                    <div class="new-items">
                        <a class="cover-img-link" href="comic.php?ComicID=<?php echo $items['ComicID'] ?>">
                            <img class="cover-img" src="Content/<?php echo $items['URL'].'/'.$items['CoverIMG']; ?>">
                        </a>
                        <ul class="item-name-chapter-list">
                            <li class="item-name line-center">
                                <h3>
                                    <a href="comic.php?ComicID=<?php echo $items['ComicID'] ?>"><?php echo $items['Name'] ?></a>
                                </h3>
                            </li>
                            <?php
                                $new_chapter_select_query = "select * from chapter where ComicID = '".$items['ComicID']."' order by DateSubmitted desc limit 3";
                                $new_chapter_result = mysqli_query($conn, $new_chapter_select_query);
                                while($chapter = mysqli_fetch_assoc($new_chapter_result))
                                {
                                    ?>
                                        <li class="new-chapter line-center">
                                            <a href="chapter.php?ComicID=<?php echo $chapter['ComicID']; ?>&ChapterID=<?php echo $chapter['ChapterID']; ?>">
                                                <?php echo $chapter['ChapterName']; ?></a>
                                        </li>
                                    <?php
                                }
                                ?>
                        </ul>
                    </div>
                    <?php
                        }
                        ?>
                    <ul id="pagination">
                        <?php
                            for($i=1;$i<=$total_page;$i++)
                            {
                                ?>
                                <li>
                                    <a class="pagination-item <?php if($i == $page) echo "pagination-item-active";?>"
                                       href="index.php?page=<?php echo $i ;?>">
                                        <?php echo $i; ?></a>
                                </li>
                                <?php
                            }
                        ?>
                    </ul>
                </div>
            </div>
            <div id="right-col"></div>
        </div>
    </div>

    <div id="footer"></div>
</body>
<script type="text/javascript" src="Js/slide.js"></script>
<script type="text/javascript" src="Js/login-modal.js"></script>
<script type="text/javascript" src="Js/pagination.js"></script>
</html>