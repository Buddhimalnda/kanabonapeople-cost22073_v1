<?php
    $title = "signup";
    // include_once '../../php/session.php';
    include_once '../../php/connect.php';
    include_once '../../php/classes/user.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    $db = new DB_CONNECT();
    $user = new User($db-> connect(),false);

    
if($user->register($username, $password, $email, $phone)){
    echo "success";
}
else{
    echo "failed";
}
    
?>