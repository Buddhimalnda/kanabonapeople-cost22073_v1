<?php
include_once '../../php/connect.php';
include_once '../../php/classes/food.php';
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$image = $_POST['image'];
// $category = $_POST['category'];
// $resturant = $_POST['resturant'];

$db = new DB_CONNECT();
$food = new Food($db->connect(), false);
$food->setFood($name,  $price, $description, $image, "");
    // $sql = "INSERT INTO food_resturant(`f_id`, `res_id`) VALUES (,'$resturant')";
    // $result = mysqli_query($db->connect(), $sql);
    // if ($result) {
    //     // return true;
    // } else {
    //     // return false;
    // }
    if ($food->addFoodWithThis()){
        echo "Food added successfully";
    }else {
        echo "Failed to add food 1";
    }
?>