<?php
require 'vendor/autoload.php';
require 'config/config.php';
$c = $_GET['c'] ?? "index";
$m = $_GET['m'] ?? "index";
$con = ucfirst($c) . "_Controller";
$conRuta = "src/controller/" . $con . ".php";
require_once $conRuta;
$controlador = new $con();
$controlador->{$m}();

use Micaela\mvc\Libs\App;