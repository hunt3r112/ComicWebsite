<?php
    include 'check-account-session.php';
?>
<!DOCTYPE html>
<html lang="en">
    <?php
        require_once 'connect.php';
        $authorID = $_GET['AuthorID'];
        $author_query = "select * from author where AuthorID = $authorID";
        $author = mysqli_fetch_assoc(mysqli_query($conn,$author_query));
        $page = 1;
        $limit = 10;
        $arr_sql = "select ComicID from comic where AuthorID = $authorID";
        $arr_list = mysqli_query($conn,$arr_sql);
        $total_record = mysqli_num_rows($arr_list);
        $total_page = ceil($total_record/$limit);
        if(isset($_GET["page"]))
            $page = $_GET["page"];
        if($page<1) $page=1;
        if($page>$total_page) $page=$total_page;
        $start=($page-1)*$limit;
        $item_select_query = "select * from comic where AuthorID = $authorID order by LastUpdated desc limit $start,$limit";
        $item_result = mysqli_query($conn, $item_select_query);
    ?>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Css/stylesheet.css">
        <title>Tác giả: <?php echo $author['AuthorName'];?></title>
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
            <div id="search-content-wrapper">
                <div class="section-header">
                    <h2 class="section-name new-comic-section">Tác giả: <?php echo $author['AuthorName'];?> » Tổng: <?php echo $total_record;?> truyện</h2>
                </div>
                <div id="search-content">
                    <?php
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
                                    $new_chapter_select_query = "select * from chapter where ComicID = '".$items['ComicID']."' order by DateSubmitted desc limit 1";
                                    $new_chapter_result = mysqli_query($conn, $new_chapter_select_query);
                                    $chapter = mysqli_fetch_assoc($new_chapter_result)
                                ?>
                                <li class="new-chapter line-center">
                                    <a class="text-nowrap" href="chapter.php?ComicID=<?php echo $chapter['ComicID']; ?>&ChapterID=<?php echo $chapter['ChapterID']; ?>">
                                        <?php echo $chapter['ChapterName']; ?></a>
                                </li>
                                <li class="info-list">Tình trạng: <?php echo $items['Status']?></li>
                                <li class="info-list">Cập nhật lần cuối: <?php echo $items['LastUpdated']?></li>
                                <li class="info-list">Lượt xem: <?php echo $items['View']?></li>
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
                                   href="author.php?page=<?php echo $i ;?>">
                                    <?php echo $i; ?></a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="footer"></div>
    </body>
</html>