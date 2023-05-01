<?php
include "connect.php";
include "classes/food.php";
$db = new DB_CONNECT();
$food = new Food($db->connect(), 1);
// print($food->getId());
echo $food->getId();
?>