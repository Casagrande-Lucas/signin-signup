<?php
session_start();
try {
    if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['user_password']) && !empty($_POST['user_password'])) {

        require_once 'global.php';

        $username = addslashes($_POST['username']);
        $user_password = addslashes($_POST['user_password']);

        $user = new User();
        if ($user->signin($username, $user_password) === true) {
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