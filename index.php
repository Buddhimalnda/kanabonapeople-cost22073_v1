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

        <?php require "./components/foodView/index.php" ?>
        <div class="hr"></div>
        
        <?php require "./components/resturantView/index.php" ?>
       
    </div>
    <script src="https://kit.fontawesome.com/d1c69586b9.js" crossorigin="anonymous"></script>
</body>