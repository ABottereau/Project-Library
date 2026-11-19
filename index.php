<?php

require_once 'config/config.php';
$pdo = new \PDO(DSN, USER, PASS);

$infos_uri = explode('/', $_SERVER['REQUEST_URI']);
var_dump($infos_uri);
echo 'Salut! <br>';

$action = $infos_uri[2];

include('Controller/'.$action.'Controller.php');
