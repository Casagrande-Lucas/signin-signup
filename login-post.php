<?php
session_start();

if(isset($_POST['username']) && empty($_POST['username']) && isset($_POST['password']) && empty($_POST['password'])) {
    require_once 'global.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = new User();

    if($user->login($username, $password) == true) {
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