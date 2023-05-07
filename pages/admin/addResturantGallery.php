<?php
include_once '../../php/connect.php';
include_once '../../php/classes/resturant.php';
$r_id = $_GET['res_id'];
$db = new DB_CONNECT();
$resturant = new Restaurant($db->connect(), $r_id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resturant Gallery add image</title>
    <link rel="stylesheet" href="../../assets/styles/add.style.css">
    <link rel="stylesheet" href="../../assets/styles/style.css">
</head>
<body>
    <div class="container">
        <div class="panel">
            <?php 
            echo"
            <form action='resturantGallery.php?res_id=$r_id' method='post'>
            "; ?>    
            <div class="group">
                    <h1>Add Image</h1>
                </div>
                <div class="group inp">
                    <label for="">Resturant Name</label>
                    <!-- <input type="text" name="name" id="name" placeholder="Food Name"> -->
                    <label><?php echo $resturant->getName(); ?></label>
                </div>
                <div class="group inp">
                    <label for="">Resturant Title</label>
                    <input type="text" name="name" id="img" placeholder="Image title">
                </div>
                <div class="group inp">
                    <label for="">Resturant Image <span style="font-size: 10px;">(please follow the Guidelines)</span></label>
                    <input type="text" name="link" id="img" placeholder="Image">
                </div>
                <div class="group btn">
                    <button type="reset" class="reset">Reset</button>
                    <button type="submit">Add</button>
                </div>

            </form>
        </div>
    </div>
</body>
</html>