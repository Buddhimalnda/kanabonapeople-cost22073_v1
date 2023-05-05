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
  echo "<title>Restaurant | $name</title>";
  ?>
  <link rel="stylesheet" href="../assets/styles/resturent.style.css">
</head>

<body>
  <h1>About</h1>
  <?php
  $img = $resturant->getImage();
  ?>
  <!-- <div class="fond"> <span class="s1">blog </span><span class="s2">card</span></div> -->
  <div class="card">
    <div class="thumbnail">
      <?php echo "<img class='left' src='$img'>"; ?>
    </div>
    <div class="right">
      <h2>
        <?php echo $resturant->getName();?>
      </h2>
      
      <div class="separator"></div>
      <p><?php echo $resturant->getDescription();?></p>
      <div class="scroll">
        <a href="#map">Map</a>
        <a href="#gallery">Gallery</a>
      </div>

    </div>
    
  </div>
  <div class="map">
    <a name="map"></a>
    <h1>Location</h1>
      <?php 
        $map = $resturant->getMetadata();
        // $map = $json->iframe;
        // print($json);
        echo "$map";
        // echo "<script> console.log($json)  </script>";
      ?>
      <!--  -->
    </div>
    
    <h1>Gallery</h1>
    <a name="gallery"></a>
    <div class="gallery-title">
    
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