<?php
include_once '../../php/connect.php';
include_once '../../php/classes/resturant.php';
$res_id = $_GET['res_id'];
$link = $_POST['link'];
$name = $_POST['name'];

$db = new DB_CONNECT();

$sql = "INSERT INTO`restutent_gallery`(`res_id`, `img`, `title`) VALUES ('$res_id', '$link', '$name')";
$result = mysqli_query($db->connect(), $sql);
if ($result) {
    echo "success..!";
} else {
    echo "Failed..!";
}
?>