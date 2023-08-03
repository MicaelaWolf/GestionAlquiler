<?php

use Micaela\App\Libs\Controlador;
use Micaela\App\Models\Producto;

class Producto_Controller extends Controlador
{
  public $dato;

  public function __construct()
  {
    parent::__construct();
  }

  public function listar()
  {
    $lista = Producto::listar();
    $this->cargarVista('producto/listar', $lista);
  }
  public function crear()
  {
    //$lista = Producto::listar();
    $this->cargarVista('producto/crear');
  }
  public function nuevo()
  {
    $codigo = $_POST['codigo'];
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

    $descripcion = $_POST['descripcion'] ?? "Sin descripción";
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

    $precio = $_POST['precio'];
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
  }
}