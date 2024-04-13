<?php 
include 'includeFiles.php';

$router = new Router();
$url = '/' . $_GET['route'];

$router->addRoute('/', LoginController::class, 'show');
$router->addRoute('/login', LoginController::class, 'show');
$router->addRoute('/register', RegisterController::class, 'show');
$router->addRoute('/dashboard', DashboardController::class, 'show');

$router->dispatch($url);
?>