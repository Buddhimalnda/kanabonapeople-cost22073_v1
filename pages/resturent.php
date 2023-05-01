<?php
$id = $_GET['id'];
include '..\php\connect.php';
include '..\php\classes\resturant.php';
$db = new DB_CONNECT();
$resturant = new Restaurant($db->connect(), $id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  $name = $resturant->getName();
  echo "<title>Resturent | $name</title>";
  ?>
  <link rel="stylesheet" href="../assets/styles/resturent.style.css">
</head>

<body>
  <?php
  $img = $resturant->getImage();
  ?>
  <!-- <div class="fond"> <span class="s1">blog </span><span class="s2">card</span></div> -->
  <div class="card">
    <div class="thumbnail">
      <?php echo "<img class='left' src='$img'>"; ?>
    </div>
    <div class="right">
      <h1>
        <?php echo $resturant->getName();?>
      </h1>
      <div class="author"><img src="https://randomuser.me/api/portraits/men/95.jpg">
        <h2>Igor MARTY</h2>
      </div>
      <div class="separator"></div>
      <p><?php echo $resturant->getDescription();?></p>
    </div>
    <h5>12</h5>
    <h6>JANUARY</h6>
    <ul>
      <li><i class="fa fa-eye fa-2x"></i></li>
      <li><i class="fa fa-heart-o fa-2x"></i></li>
      <li><i class="fa fa-envelope-o fa-2x"></i></li>
      <li><i class="fa fa-share-alt fa-2x"></i></li>
    </ul>
    <div class="fab"><i class="fa fa-arrow-down fa-3x"> </i></div>
  </div>
  <div class="map">
      <?php 
        $map = $resturant->getMetadata();
        // $map = $json->iframe;
        // print($json);
        echo "$map";
        // echo "<script> console.log($json)  </script>";
      ?>
      <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126757.67791408818!2d79.85526720646992!3d6.869330816424121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2595fdbd5dd21%3A0x3a6aea27ffd9bc52!2sMarino%20Beach%20Colombo!5e0!3m2!1sen!2slk!4v1682972567596!5m2!1sen!2slk' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>
    </div>
  <h1 class="title">Restutrent Gallery</h1>

  <div class="gallery" id="gallery">
  <?php
    $title = "gallery";


    // $imgs = array();
    $sql = "SELECT * FROM restutent_gallery";
    $result = mysqli_query($db->connect(), $sql);
    // $row = mysqli_fetch_array($result);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $i=0;
        while ($row = mysqli_fetch_assoc($result)) {
            $img = $row["img"];
            echo "<div class='gallery-item'>
            <div class='content'><img src='$img' alt=''></div>
        </div>";
        }
    } else {
        print("error");
    }
    
?>
        
    </div>

    
  <script src="https://kit.fontawesome.com/d1c69586b9.js" crossorigin="anonymous"></script>
  <script src="../assets/js/gallery.js"></script>
</body>

</html>-