<?php

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'employee';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$controller = ucfirst($controller);

$fileController = 'controllers/' . $controller . 'Controller.php';

if (!file_exists($fileController)) {
    die('File không tồn tại');
}

require_once $fileController;
$className = $controller . 'Controller';
$object = new $className;

if (!method_exists($object, $action)) {
    die('Method không tồn tại!');
}

$object->$action();
