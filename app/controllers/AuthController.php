<?php
session_start();
require_once __DIR__ . '/../models/User.php';


class AuthController
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userModel = new User();
            $user = $userModel->login($_POST['email']);


            if ($user && password_verify($_POST['password'], $user['password'])) {
                $_SESSION['user'] = $user;
                header('Location: index.php');
                exit;
            }


            $error = "Email ou mot de passe incorrect";
        }



        require_once __DIR__ . '/../views/auth/login.php';
    }


    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userModel = new User();
            $userModel->register(
                $_POST['name'],
                $_POST['email'],
                $_POST['password']
            );


            header('Location: index.php?action=login');
            exit;
        }


        require_once __DIR__ . '/../views/auth/register.php';
    }


    public function logout()
    {
        session_destroy();
        header('Location: index.php?action=login');
    }
}