<?php
session_start();

if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['user_password']) && !empty($_POST['user_password'])) {
    require_once 'global.php';

    $username = $_POST['username'];
    $user_password = $_POST['user_password'];
    $user = new User();

    if($user->login($username, $user_password) == true) {
        if(isset($_SESSION['id_user'])) {
            header('Location: dashboard.php');
        } else {
            $_SESSION['errorLogin'] = true;
            header('location: index.php');
        }
    } else {
        $_SESSION['errorLogin'] = true;
        header('location: index.php');
    }
} else {
    $_SESSION['errorLogin'] = true;
    header('Location: index.php');
}