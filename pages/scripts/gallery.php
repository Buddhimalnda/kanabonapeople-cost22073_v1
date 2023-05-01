<?php
    $title = "gallery";
    include_once '../../php/connect.php';
    include_once '../../php/classes/resturent.php';

    $db = new DB_CONNECT();

    $imgs = array();
    $sql = "SELECT * FROM restaurant";
    $result = mysqli_query($db->connect(), $sql);
    // $row = mysqli_fetch_array($result);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $i=0;
        while ($row = mysqli_fetch_assoc($result)) {
            $imgs[$i++] = $row["img"];
        }
        return $imgs;
    } else {
        print("error");
        return $imgs;
    }
    
?>