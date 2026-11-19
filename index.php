<?php
include('view/head.html.php');
include('Controller/AuthorController.php');
require_once 'config/config.php';

$infos_uri = explode('/', $_SERVER['REQUEST_URI']);
$controller = ucfirst($infos_uri[1]).'Controller';
if ($controller != 'AuthorController') {
    die ('Page not found');
}

$action = $infos_uri[2];
$controllerInstance = new $controller($pdo);

$controllerInstance->$action();