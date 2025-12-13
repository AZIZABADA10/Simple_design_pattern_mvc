<?php

require_once '../app/models/User.php';

class HomeController
{
    public function index()
    {
        $user = new User();
        $users = $user->getAllUsers();

        require_once '../app/views/home.php';
    }
}
