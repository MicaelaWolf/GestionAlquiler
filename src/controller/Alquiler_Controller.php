<?php

use Micaela\App\Libs\Controlador;
require_once 'src/models/Alquiler.php';

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

  public function alquilar($id, $persona, $casa, $duracionMeses, $costo){
    $alquilerModel= new Alquiler($id, $persona, $casa, $duracionMeses, $costo);
    $mensajeAlquilar = $alquilerModel->alquilar($id, $persona, $casa, $duracionMeses, $costo);
    return $mensajeAlquilar;
  }
}