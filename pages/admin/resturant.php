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
    echo "Restaurant added successfully";
    echo "
    <div class='alert'>

        <div class='toast active'>
      
            <div class='toast-content'>
              <i class='fas fa-solid fa-check check'></i>
          
              <div class='message'>
                <span class='text text-1'>Success</span>
                <span class='text text-2'>Your changes has been saved</span>
              </div>
            </div>
            <i class='fa-solid fa-xmark close'></i>
          
            <!-- Remove 'active' class, this is just to show in Codepen thumbnail -->
            <div class='progress active'></div>
          </div>
          
          <button>Show Toast</button>
          
          </div>
          <script src='../../assets/js/alert.js'></script>
    ";
    header('Location: ' . $_SERVER['HTTP_REFERER']);

}else {
    echo "Failed to add food";
}
?>