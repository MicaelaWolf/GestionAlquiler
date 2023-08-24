<?php

use Micaela\App\Libs\Controlador;
use Micaela\App\models\Casa;

class Api_Casa_Controller extends Controlador
{

  public function agregar()
  {
    $res = new stdClass();
    $res->codigo = 200;
    $res->respuesta = ['lista' => []];

    try {
      $datos = file_get_contents("php://input");
      $json = json_decode($datos);
      $calle = $json->calle;
      $numero = $json->numero;

      $this->cargarVista('api/res', $res);
      //$agregar = Casa::crear();

    } catch (\Throwable $th) {
      $res->codigo = 500;
    }
  }

  public function listar()
  {
    $res = new stdClass();
    $res->codigo = 200;
    $res->respuesta = ['lista' => []];

    try {

      $lista = Casa::listar();
      $res->respuesta = [
        'lista' => $lista,
        'total' => count($lista)
      ];
      $this->cargarVista('api/res', $res);
    } catch (\Throwable $th) {
      //throw $th; 
      $res->codigo = 500;
      $this->cargarVista('api/res', $res);
    }
  }
}
