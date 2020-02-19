<?php
/**
 * Created by PhpStorm.
 * User: Nam
 * Date: 2/6/2020
 * Time: 11:37 PM
 */
    require_once 'connect.php';
    $searchKey = $_GET['search'];
    $searchQuery = "select * from comic where Name like '%$searchKey%'";
    $searchResult = mysqli_query($conn, $searchQuery);
    echo '<ul>';
    while ($search = mysqli_fetch_assoc($searchResult))
        echo "<li><a href='comic.php?ComicID=".$search['ComicID']."'>".$search['Name']."</a></li>";
    echo '</ul>';
?>