<?php
include 'check-account-session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Css/stylesheet.css">
    <?php
        require_once 'connect.php';
        $comicID = $_GET['ComicID'];
        $comic_select_query = "select * from comic where ComicID = '$comicID'";
        $comic_result = mysqli_query($conn, $comic_select_query);
        $comic = mysqli_fetch_assoc($comic_result);
    ?>
    <title>Đọc truyện <?php echo $comic['Name']; ?></title>
</head>
<body id="container">
<!--<div id="navigation-bar"></div>-->
<?php
    include "navigation-bar.php";
?>
<div id="content-wrapper">
    <?php
        include 'slide.php';
    ?>
    <div id="main-wrapper">
        <div id="left-col">
            <div class="section-header">
                <h2 class="section-name new-comic-section">Thông tin truyện</h2>
            </div>
            <div id="comic-info">
                <div id="comic-info-img">
                    <img src="Content/<?php echo $comic['URL'].'/'.$comic['CoverIMG']; ?>">
                </div>
                <div id="comic-info-wrapper">
                    <button class="comic-tab-links comic-tab-active" onclick="openPage(event,'comic-info-text')">
                        Thông tin
                    </button>
                    <button class="comic-tab-links" onclick="openPage(event, 'comic-summary')">
                        Sơ lược
                    </button>
                    <ul id="comic-info-text" class="comic-tab-content">
                        <li>
                            <h1><?php echo $comic['Name']; ?></h1>
                        </li>
                        <li>Tác giả : <span class="tag-link"><a href="#">
                            <?php
                            $author_select_query = "select author.AuthorName from author inner join comic on author.AuthorID = comic.AuthorID where comic.AuthorID = '".$comic['AuthorID']."'";
                            $author_result = mysqli_query($conn, $author_select_query);
                            $author = mysqli_fetch_assoc($author_result);
                            echo $author['AuthorName'];
                            ?>
                        </a></span></li>
                        <li>Tình trạng : <?php echo $comic['Status']; ?></li>
                        <li>Ngày đăng : <?php echo $comic['DateSubmitted']; ?></li>
                        <li>Cập nhật gần nhất : <?php echo $comic['LastUpdated']; ?></li>
                        <li>Lượt xem : <?php echo $comic['View']; ?></li>
                        <li>Thể loại :
                            <?php
                            $genre_select_query = "select genre.GenreName from genre inner join comic_genre on genre.GenreID = comic_genre.GenreID where ComicID = '".$comic['ComicID']."' order by genre.GenreName asc";
                            $genre_result = mysqli_query($conn, $genre_select_query);
                            while ($genre = mysqli_fetch_assoc($genre_result))
                                echo '<span class="tag-link"><a href="#">'.$genre['GenreName'].'</a></span>';
                            ?>
                        </li>
                    </ul>
                    <div id="comic-summary" class="comic-tab-content">
                        <p><?php echo $comic['Summary']; ?></p>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                function openPage(evt, pageName) {
                    var i, tabcontent, tablinks;
                    tabcontent = document.getElementsByClassName("comic-tab-content");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }
                    tablinks = document.getElementsByClassName("comic-tab-links");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].classList.remove('comic-tab-active');
                    }
                    evt.currentTarget.className += ' comic-tab-active';
                    document.getElementById(pageName).style.display = "block";
                }
            </script>
            <div id="comic-chapter-section">
                <div class="section-header">
                    <h2 class="section-name comic-chapter-section">Danh sách chương</h2>
                </div>
                <ul id="comic-chapter-list">
                    <p class="chapter-row-title">
                        <span class="chapter-row-title-name">Tên chương</span>
                        <span class="chapter-row-title-view">Lượt xem</span>
                        <span class="chapter-row-title-time">Ngày đăng</span>
                    </p>
                    <?php
                    $comic_chapter_select_query = "select * from chapter where ComicID = '".$comic['ComicID']."' order by DateSubmitted desc";
                    $comic_chapter_result = mysqli_query($conn, $comic_chapter_select_query);
                    while($chapter = mysqli_fetch_assoc($comic_chapter_result))
                    {
                        ?>
                        <li class="new-chapter"><a class="chapter-name text-nowrap" href="chapter.php?ComicID=<?php echo $chapter['ComicID']; ?>&ChapterID=<?php echo $chapter['ChapterID']; ?>"><?php echo $chapter['ChapterName']; ?></a>
                            <span class="chapter-view text-nowrap"><?php echo $chapter['ChapterView']; ?></span>
                            <span class="chapter-time text-nowrap"><?php echo $chapter['DateSubmitted']; ?></span></li>
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
</html>