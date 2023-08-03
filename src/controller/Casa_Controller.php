<?php

use Micaela\App\Libs\Controlador;

class Casa_Controller extends Controlador {
  public $dato;

  public function __construct()
  {
    parent::__construct();
  }

  public function listar()
  {
    $this->cargarVista('casa/listar');
  }
  public function crear()
  {
    $this->cargarVista('casa/crear');
  }
}