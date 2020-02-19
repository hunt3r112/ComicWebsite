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
    ?>
    <title><?php echo $image['ChapterName']; ?></title>
</head>
<body id="container">
    <div id="chapter-display">
        <?php
            $comic_select_query = "select * from comic where ComicID = '$comicID'";
            $comic_result = mysqli_query($conn, $comic_select_query);
            $comic = mysqli_fetch_assoc($comic_result);
            $image_string = $image['ChapterImage'];
            $image_array = explode("#",$image_string);
            foreach ($image_array as $key => $value)
                echo '<img src="Content/'.$comic['Name'].'/'.$image['ChapterName'].'/'.$value.'">';
        ?>
    </div>
</body>
</html>