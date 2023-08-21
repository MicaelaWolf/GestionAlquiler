<?php

use Micaela\App\Libs\Controlador;
use Micaela\App\models\Alquiler;

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

  public function formAlquilar()
  {

    //deberia desplegar un formulario de alquilar
    //$alquilerModel= new Alquiler($id, $persona, $casa, $duracionMeses, $costo);
    //$mensajeAlquilar = $alquilerModel->alquilar($id, $persona, $casa, $duracionMeses, $costo);
    //return $mensajeAlquilar;
  }
  public function alquilar()
  {
    try {
      //$alquilerModel= new Alquiler($id, $persona, $casa, $duracionMeses, $costo);
      //$mensajeAlquilar = $alquilerModel->alquilar($id, $persona, $casa, $duracionMeses, $costo);
      //return $mensajeAlquilar;
      //code...
    } catch (\Throwable $th) {
      //throw $th;
      //mostrar vista de error al alquilar
    }

    //deberia desplegar un metodo de alquilar

  }
}