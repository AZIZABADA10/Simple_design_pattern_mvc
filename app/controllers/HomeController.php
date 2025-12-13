<?php
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../models/Employee.php';

class HomeController
{
    // public function index()
    // {
    //     $userModel = new User();
    //     $users = $userModel->getAllUsers();

    //     require_once __DIR__ . '/../views/home.php';
    // }


    public function index()
    {
        $employeeModel = new Employee();
        $employees = $employeeModel->getAllEmployees();

        require_once __DIR__ . '/../views/home.php';
    }
}
