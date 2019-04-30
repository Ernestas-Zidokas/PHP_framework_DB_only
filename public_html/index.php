<?php

require_once '../bootloader.php';

switch ($_SERVER['REQUEST_URI']) {
    case '/about.php':
        $controller = '\App\Controller\About';
        break;
    default :
        $controller = '\App\Controller\Home';
        break;
}

$control = new $controller();
print $control->onRender();


