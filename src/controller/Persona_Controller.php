<?php

use Micaela\App\Libs\Controlador;
use Micaela\App\models\Persona;

class Persona_Controller extends Controlador
{
  public $dato;

  public function __construct()
  {
    parent::__construct();
  }

  public function listar()
  {
    $lista = Persona::listar();
    $this->cargarVista('persona/listar', $lista);
  }
  
  public function crear()
  {
    $this->cargarVista('persona/crear');
  }
}