<?php
require_once '../bootloader.php';

$controller = new \App\Controller\Home();
print $controller->onRender();

$data = [
    'index.php' => 'Index',
    'register.php' => 'Register',
    'login.php' => 'Login',
    'logout.php' => 'Logout'
];

$navigation = new App\View\Navigation($data);
