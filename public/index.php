<?php
require_once '../app/controllers/HomeController.php';
require_once '../app/controllers/AuthController.php';

$action = $_GET['action'] ?? 'home';
$action = $_GET['action'] ?? 'home';

switch ($action) {
    case 'login':
        (new AuthController())->login();
        break;

    case 'register':
        (new AuthController())->register();
        break;

    case 'logout':
        (new AuthController())->logout();
        break;

    case 'home':
    default:
        // Si l'utilisateur n'est pas connecté, redirige vers login
        if (!isset($_SESSION['user'])) {
            header('Location: index.php?action=login');
            exit;
        }
        (new HomeController())->index();
        break;
}
