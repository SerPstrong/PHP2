<?php

use app\model\Product;

include $_SERVER['DOCUMENT_ROOT'] . "/../config/config.php";
include $_SERVER['DOCUMENT_ROOT'] . "/../engine/Autoload.php";

spl_autoload_register([new Autoload, 'load']);


$url_array = explode("/", $_SERVER['REQUEST_URI']);

$controllerName = $url_array[1] ?: 'index'; // если null то вернет index, если не null, то вернет $url_array[1]
$actionName = $url_array[2];

$controllerClass = CONTROLLER_NAMESPACE . ucfirst($controllerName) . "Controller";
if (class_exists($controllerClass)) {
    $controller = new $controllerClass();
    $controller->runAction($actionName);
} else {
    echo "no controller {$controllerClass}";
}



