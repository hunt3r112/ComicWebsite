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
    $chapterID = $_GET['ChapterID'];
    $image_select_query = "select * from chapter where ComicID = '$comicID' and ChapterID = '$chapterID'";
    $image_result = mysqli_query($conn, $image_select_query);
    $image = mysqli_fetch_assoc($image_result);
    $comic_select_query = "select * from comic where ComicID = '$comicID'";
    $comic_result = mysqli_query($conn, $comic_select_query);
    $comic = mysqli_fetch_assoc($comic_result);
    ?>
    <title><?php echo $image['ChapterName']; ?></title>
</head>
<body id="container">
    <?php
    include 'navigation-bar.php';
    ?>
    <div id="content-wrapper">
        <div id="chapter-header">
            <div id="chapter-breadcrumbs">
                <a href="index.php">Trang chủ</a> »
                <a href="comic.php?ComicID=<?php echo $comicID;?>"><?php echo $comic['Name'];?></a> »
                <?php echo $image['ChapterName']; ;?>
            </div>
            <h1><?php echo $image['ChapterName']; ;?></h1>
        </div>
        <?php
            $comic_chapter_select_query = "select * from chapter where ComicID = '".$comic['ComicID']."' order by DateSubmitted desc";
            $comic_chapter_result = mysqli_query($conn, $comic_chapter_select_query);
            $prev_chapter_query = "select * from chapter where ComicID = '".$comic['ComicID']."' and DateSubmitted < '".$image['DateSubmitted']."' order by DateSubmitted desc limit 1";
            $prev_chapter = mysqli_fetch_assoc(mysqli_query($conn,$prev_chapter_query));
            $next_chapter_query = "select * from chapter where ComicID = '".$comic['ComicID']."' and DateSubmitted > '".$image['DateSubmitted']."' order by DateSubmitted asc limit 1";
            $next_chapter = mysqli_fetch_assoc(mysqli_query($conn,$next_chapter_query));
        ?>
        <div class="chapter-navigation">
            <?php
                if($prev_chapter)
                    echo '<a class="prev-next-button" href="chapter.php?ComicID='.$prev_chapter["ComicID"].'&ChapterID='.$prev_chapter["ChapterID"].'">Chương trước</a>';
            ?>
            <select class="chapter-select" onchange="window.location.href = this.value;">
                <?php
                    $i=0;
                    while ($comic_chapter[$i] = mysqli_fetch_assoc($comic_chapter_result))
                    {
                        ?>
                        <option value="chapter.php?ComicID=<?php echo $comic_chapter[$i]['ComicID'] ;?>&ChapterID=<?php echo $comic_chapter[$i]['ChapterID'] ;?>" <?php if ($comic_chapter[$i]['ChapterID']==$chapterID) echo 'selected';?>>
                            <?php echo $comic_chapter[$i]['ChapterName'] ;?></option>
                        <?php
                        $i++;
                    }
                    unset($comic_chapter[$i]);
                ?>
            </select>
            <?php
            if($next_chapter)
                echo '<a class="prev-next-button" href="chapter.php?ComicID='.$next_chapter["ComicID"].'&ChapterID='.$next_chapter["ChapterID"].'">Chương kế</a>';
            ?>
        </div>
        <div id="chapter-display">
            <?php
                $image_string = $image['ChapterImage'];
                $image_array = explode("#",$image_string);
                foreach ($image_array as $key => $value)
                    echo '<img src="Content/'.$comic['Name'].'/'.$image['ChapterName'].'/'.$value.'">';
            ?>
        </div>
        <div class="chapter-navigation">
            <?php
            if($prev_chapter)
                echo '<a class="prev-next-button" href="chapter.php?ComicID='.$prev_chapter["ComicID"].'&ChapterID='.$prev_chapter["ChapterID"].'">Chương trước</a>';
            ?>
            <select class="chapter-select" onchange="window.location.href = this.value;">
                <?php
                foreach ($comic_chapter as $key => $value)
                {
                    ?>
                    <option value="chapter.php?ComicID=<?php echo $value['ComicID'] ;?>&ChapterID=<?php echo $value['ChapterID'] ;?>" <?php if ($value['ChapterID']==$chapterID) echo 'selected';?>>
                        <?php echo $value['ChapterName'] ;?></option>
                    <?php
                }
                ?>
            </select>
            <?php
            if($next_chapter)
                echo '<a class="prev-next-button" href="chapter.php?ComicID='.$next_chapter["ComicID"].'&ChapterID='.$next_chapter["ChapterID"].'">Chương kế</a>';
            ?>
        </div>
    </div>
</body>
</html>