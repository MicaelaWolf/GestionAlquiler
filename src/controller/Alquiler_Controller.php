<?php

use Micaela\App\Libs\Controlador;

class Alquiler_Controller extends Controlador {
  public $dato;

  public function __construct()
  {
    parent::__construct();
  }
  
  public function listar()
  {
    $this->cargarVista('alquiler/listar');
  }

  public function alquilar(){
    $this->cargarVista('alquiler/alquilar');
  }
}