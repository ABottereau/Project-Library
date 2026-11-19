<?php
include('inc/head.php');
require_once 'config/config.php';

$infos_uri = explode('/', $_SERVER['REQUEST_URI']);
$action = $infos_uri[2];

include('Controller/'.$action.'Controller.php');