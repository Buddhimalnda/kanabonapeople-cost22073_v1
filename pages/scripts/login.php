<?php
    $title = "login";
    include_once '../../php/connect.php';
    include_once '../../php/classes/user.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $db = new DB_CONNECT();
    $user = new User($db-> connect(), false);

    if($user->login($username, $password)){
        echo "success";
        session_start();
    $_SESSION['username'] = $username;
        $_SESSION['login'] = true;
        header('location: ../../index.php');

    }
    else{
        echo "failed";
    }
?>