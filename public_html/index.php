<?php

require_once '../bootloader.php';

$controller = new \App\Controller\Home();
print $controller->onRender();
