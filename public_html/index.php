<?php

require_once '../bootloader.php';

if ($_SERVER['REQUEST_URI'] == '/about.php') {
    $controllerAbout = new \App\Controller\About();
    print $controllerAbout->onRender();
} else {
    $controllerHome = new \App\Controller\Home();
    print $controllerHome->onRender();
}