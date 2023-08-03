<?php 
namespace Micaela\App\Libs;
class Main {
  public static function iniciar() {

    $c = $_GET['c'] ?? "index";
    $m = $_GET['m'] ?? "index";
    $con = ucfirst($c) . "_Controller";
    $conRuta = "src/controller/" . $con . ".php";
    require_once $conRuta;
    $controlador = new $con();
    $controlador->{$m}();
  }
}