<?php

use Micaela\App\Libs\Controlador;
use Micaela\App\models\Alquiler;

require_once 'src/models/Alquiler.php';

class Alquiler_Controller extends Controlador
{
  public $dato;

  public function __construct()
  {
    parent::__construct();
  }

  public function listar()
  {
    //deberia cargar la lista de alquileres
    $lista = Alquiler::listar();
    $this->cargarVista('alquiler/listar', $lista);
  }

  public function alquilar($id, $persona, $casa, $duracionMeses, $costo)
  {
    //$alquilerModel= new Alquiler($id, $persona, $casa, $duracionMeses, $costo);
    //$mensajeAlquilar = $alquilerModel->alquilar($id, $persona, $casa, $duracionMeses, $costo);
    //return $mensajeAlquilar;
  }
}