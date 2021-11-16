<?php
session_start();
try {
    if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password_user']) && !empty($_POST['password_user'])) {

        require_once 'global.php';

        $username = addslashes($_POST['username']);
        $password_user = addslashes($_POST['password_user']);

        $user = new User();
        if ($user->signin($username, $password_user) === true) {
            if (isset($_SESSION['id_user'])) {
                header('Location: dashboard.php');
            }else {
                $_SESSION['errorLogin'] = true;
                header('Location: index.php');
            }
        }else {
            $_SESSION['errorLogin'] = true;
            header('Location: index.php'); 
        }
    }else {
        $_SESSION['errorLogin'] = true;
        header('Location: index.php');
    }
}catch (PDOException $e) {
    echo "ERRO: " . $e->getMessage();
    exit;
}