<?php

use Micaela\App\Libs\Controlador;

class Persona_Controller extends Controlador
{
  public $dato;

  public function __construct()
  {
    parent::__construct();
  }

  public function listar()
  {
    $this->cargarVista('persona/listar');
  }
  public function crear()
  {
    $this->cargarVista('persona/crear');
  }
}