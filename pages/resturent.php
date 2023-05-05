<?php
$id = $_GET['id'];
include '..\php\connect.php';
include '..\php\classes\resturant.php';
include '..\php\classes\user.php';
$db = new DB_CONNECT();
$resturant = new Restaurant($db->connect(), $id);

// echo "<script>console.log('$name');</script>";
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
      <!--  -->
    </div>
    
    <div class="gallery-title">
      <h1>Restutrent Gallery</h1>
      <?php
      $name = $_GET['user'];
      if($name=="admin"){
        echo "
        <div class='icons'>
          <a class='nomal' href='admin/addResturantGallery.php?res_id=$id'>
              <i class='fa fa-pen-to-square'></i>
          </a>
          <a class='nomal' href=''>
              <i class='fa-solid fa-eye'></i>
          </a>
        </div>
        ";
      }

      ?>
    </div>
  <div class="gallery" id="gallery">
  <?php
    $title = "gallery";


    // $imgs = array();
    $sql = "SELECT * FROM restutent_gallery WHERE res_id='$id' ";
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