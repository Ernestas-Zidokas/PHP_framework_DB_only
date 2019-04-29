<?php

require_once '../bootloader.php';

//$controller = new \App\Controller\Home();
//print $controller->onRender();

$data = [
    [
        'link' => 'index.php',
        'title' => 'Index'
    ],
    [
        'link' => 'register.php',
        'title' => 'Register'
    ],
    [
        'link' => 'login.php',
        'title' => 'Login'
    ],
    [
        'link' => 'logout.php',
        'title' => 'Logout'
    ]
];

$navigation = new App\View\Navigation($data);
print $navigation->render();
