<div id="slide">
    <div class="section-header">
        <h2 class="section-name recommend-section">Truyện đề cử</h2>
    </div>
    <div class="slide-buttons" id="prev-button"><</div>
    <div class="slide-buttons" id="next-button">></div>
    <div id="slide-wrapper">
        <?php
        require_once 'connect.php';
        $slide_item_query = "select * from comic order by View desc limit 15";
        $slide_item_result = mysqli_query($conn, $slide_item_query);
        while ($slide_item = mysqli_fetch_assoc($slide_item_result)) {
            ?>
            <div class="slide-items">
                <a class="cover-img-link" href="comic.php?ComicID=<?php echo $slide_item['ComicID'] ?>">
                    <img class="cover-img" src="Content/<?php echo $slide_item['URL'].'/'.$slide_item['CoverIMG']; ?>">
                </a>
                <div class="slide-items-caption">
                    <h3>
                        <a href="comic.php?ComicID=<?php echo $slide_item['ComicID'] ?>" class="slide-item-links"
                           title="<?php echo $slide_item['Name'];?>">
                            <?php echo $slide_item['Name']?>
                        </a>
                    </h3>
                    <?php
                    $newest_chapter_query = "select * from chapter where ComicID = '".$slide_item['ComicID']."' order by DateSubmitted desc limit 1";
                    $newest_chapter_result = mysqli_query($conn, $newest_chapter_query);
                    if($newest_chapter = mysqli_fetch_assoc($newest_chapter_result)) {
                        ?>
                        <a href="chapter.php?ComicID=<?php echo $newest_chapter['ComicID']; ?>&ChapterID=<?php echo $newest_chapter['ChapterID']; ?>"
                           class="slide-item-links" title="<?php echo $newest_chapter['ChapterName']; ?>">
                            <?php echo $newest_chapter['ChapterName']; ?>
                        </a>
                        <?php
                    }
                    else echo "<br>";
                    ?>
                    <p><?php echo $slide_item['View'];?> lượt xem</p>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
<script type="text/javascript" src="Js/slide.js"></script>