<?php

require_once '../bootloader.php';

$controllerHome = new \App\Controller\Home();
$controllerAbout = new \App\Controller\About();

print $controllerHome->onRender();
print $controllerAbout->onRender();

