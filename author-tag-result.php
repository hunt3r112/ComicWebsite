<?php
/**
 * Created by PhpStorm.
 * User: Nam
 * Date: 2/8/2020
 * Time: 2:35 AM
 */
    require_once 'connect.php';
    $searchKey = $_GET['search'];
    $searchQuery = "select * from author where AuthorName like '%$searchKey%'";
    $searchResult = mysqli_query($conn, $searchQuery);
    if(mysqli_num_rows($searchResult))
    {
        while ($search = mysqli_fetch_assoc($searchResult))
        {
            echo "<div class='tags-suggestion'>".$search['AuthorName']."</div>";
        }
    }
       else echo "";
?>