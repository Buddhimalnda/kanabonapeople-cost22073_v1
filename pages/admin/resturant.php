<?php
include_once '../../php/connect.php';
include_once '../../php/classes/resturant.php';
$name = $_POST['name'];
$description = $_POST['description'];
// $price = $_POST['price'];
$image = $_POST['image'];
$address = $_POST['address'];
$map = $_POST['map'];

$db = new DB_CONNECT();
$resturant = new Restaurant($db->connect(), false);
$resturant->setRestaurant($name,  $address, $description, $image, $map);
    // $sql = "INSERT INTO food_resturant(`f_id`, `res_id`) VALUES (,'$resturant')";
    // $result = mysqli_query($db->connect(), $sql);
    // if ($result) {
    //     // return true;
    // } else {
    //     // return false;
    // }
if ($resturant->addRestaurantWithThis()){
    echo "Food added successfully";
}else {
    echo "Failed to add food";
}
?>