<!DOCTYPE html>
<html lang="en">
<?php
$title = "Home";
include "php/session.php";
include "php/connect.php";
include "php/classes/food.php";
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
                <article class="card">
                    <div class="thumb">
                    </div>
                    <div class="infos">
                        <h2 class="title">new york city <span class="flag"></span></h2>
                        <h3 class="date">november 2 - 4</h3>
                        <h3 class="seats">seats remaining: 2</h3>
                        <p class="txt">
                            | Join us for our Live Infinity Session in
                            | beautiful New York City. This is a 3 day
                            | intensive workshop where you'll learn
                            | how to become a better version of...
                        </p>
                        <h3 class="details">
                            event details
                        </h3>
                    </div>
                </article>
            </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126770.62564551206!2d79.96009356499802!3d6.820578095527442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25b1097b2d5a1%3A0x6d72bfb938a8f677!2sMount%20Lavinia%20Beach!5e0!3m2!1sen!2ssg!4v1682943132727!5m2!1sen!2ssg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <script src="https://kit.fontawesome.com/d1c69586b9.js" crossorigin="anonymous"></script>
</body>