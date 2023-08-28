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
    $this->cargarVista('casa/crear');
  }
}