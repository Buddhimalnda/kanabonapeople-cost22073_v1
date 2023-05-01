<!DOCTYPE html>
<html lang="en">
<?php
$title = "Home";
include "php/session.php";
include "php/connect.php";
include "php/classes/food.php";
include "php/classes/resturant.php";
$db = new DB_CONNECT();
?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <!-- <link rel="stylesheet" href="../assets/styles/login.css"> -->
    <link rel="stylesheet" href="./assets/styles/style.css">
</head>

<body class="home">
    <?php require_once 'components\nav\index.php'; ?>

    <div class="container">
        <div class="search-bar">
            <form action="search.php" method="GET">
                <i class="fa fa-search"></i>
                <input type="text" name="search" placeholder="Search for a product" />
                <!-- <button type="submit" name="submit-search"></button> -->
            </form>
            <!-- <div class="list-search hidden">
                <ul>
                    <li>
                        <a href="search.php?search=iphone">
                            <div class="text">
                                <h3>iphone</h3>
                                <p>hint</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div> -->
        </div>
        <div class="hr"></div>

        <div class="foods">
            <h1>Foods List</h1>
            <div class="food-list">
                <?php
                $f = new Food($db->connect(), false);
                $foods = $f->getAllFood();
                for ($i = 0; $i < count($foods); $i++) {
                    ?>
                    <div class="card">
                        <?php
                        $food = new Food($db->connect(), $foods[$i]->getId());
                        ?>
                        <div class="card__image">
                            <?php
                            $img = $food->getImage();
                            echo "<img src='$img' alt='Salad' />";
                            ?>
                        </div>
                        <div class="card__info">
                            <div class="car__info--title">
                                <h3>
                                    <?php echo $food->getName(); ?>
                                </h3>
                                <p>
                                    <?php echo $food->getDescription(); ?>
                                </p>
                            </div>
                            <div class="card__info--price">
                                <p>Rs.
                                    <?php echo $food->getPrice(); ?>
                                </p>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <div class="add-cart">
                                <button><i class="fa fa-cart-shopping"></i> order</button>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="hr"></div>

        <div class="resturent">
            <h1>Resturent List</h1>
            <div class="resturent-list">
            <?php
                $r = new Restaurant($db->connect(), false);
                $resturents = $r->getAllRestaurant();
                for ($i = 0; $i < count($resturents); $i++) {
                ?>
                <article class="card">
                <?php
                    $resturent = new Restaurant($db->connect(), $resturents[$i]->getId());
                    $img = $resturent->getImage();
                    echo "<div class='thumb' style='background: url($img) no-repeat center;'></div>";
                ?>
                    <div class="infos">
                        <h2 class="title"><?php echo $resturent->getName(); ?><span class="flag"></span></h2>
                        <h3 class="seats">seats remaining: 2</h3>
                        <p class="txt"> 
                            <!-- <?php echo $resturent->getDescription() ?> -->
                            <h3 class="date"><?php echo $resturent->getAddress();?></h3>
                        </p> 
                        <?php 
                        $id = $resturent->getId();
                        echo "<a class='details' href='pages/resturent.php?id=$id' target='_blank' rel='noopener noreferrer'> " ?>
                            <h3 class="">
                                More details
                            </h3>
                        </a>
                    </div>
                </article>
                <?php
                }
                ?>
            </div>
        </div>
       
    </div>
    <script src="https://kit.fontawesome.com/d1c69586b9.js" crossorigin="anonymous"></script>
</body>