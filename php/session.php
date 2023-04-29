<?php 
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
// if(isset($_SESSION['food_id'])){
//     $foodID = $_SESSION['food_id'];
// }else{
//     $foodID = 0;
// }
// if(isset($_SESSION['restaurant_id'])){
//     $restaurantID = $_SESSION['restaurant_id'];
// }else{
//     $restaurantID = "";
// }
if(isset($_SESSION['cart'])){
    $cart = $_SESSION['cart'];
}else{
    $cart = array();
}

?>