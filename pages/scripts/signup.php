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
    if(count(str_split($phone))!=10){
        header('location: /app/pages/login.php?error=3');
    }else{
        if($user->register($username, $password, $email, $phone)){
            echo "success";
            echo "<script>if(confirm('success Registation')){
            window.location.href = '/app/pages/login.php?username=$username';
            }
            </script>";
        }
        else{
            echo "failed";
            header('location: /app/pages/login.php?error=2');
        }
    }
    
    
?>