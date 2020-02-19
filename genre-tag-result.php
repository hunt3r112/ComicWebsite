<?php
/**
 * Created by PhpStorm.
 * User: Nam
 * Date: 2/9/2020
 * Time: 1:43 AM
 */
    require_once 'connect.php';
    $searchKey = $_POST['search'];
    $searchQuery = "select * from genre where GenreName like '%$searchKey%'";
    $searchResult = mysqli_query($conn, $searchQuery);
    $genreResult = array();
    if(mysqli_num_rows($searchResult) > 0)
    {
        while ($search = mysqli_fetch_assoc($searchResult))
        {
            $genreResult[] = $search['GenreName'];
        }
        echo json_encode($genreResult);
    }
    $conn->close();
?>