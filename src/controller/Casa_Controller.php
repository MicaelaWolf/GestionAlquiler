<?php

use Micaela\App\Libs\Controlador;
use Micaela\App\models\Casa;

class Casa_Controller extends Controlador {
  public $dato;

  public function __construct()
  {
    parent::__construct();
  }

  public function listar()
  {
    $lista = Casa::listar();
    $this->cargarVista('casa/listar', $lista);
  }

  public function crear()
  {
    $id = $_POST['id'];
    $calle = $_POST['calle'];
    $numero = $_POST['numero'];
    $casa = new Casa(null, $id, $calle, $numero);
    $id = $casa->crear();
    $this->cargarVista('casa/crear', $id);
  }
}