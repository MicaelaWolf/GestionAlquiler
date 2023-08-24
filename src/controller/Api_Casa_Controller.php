<?php
use Micaela\App\Libs\Controlador;
use Micaela\App\models\Casa;

class Api_Casa_Controller extends Controlador {

  public function agregar() {
    $res=new stdClass();
    $res->codigo=200;
    $res->respuesta = ['lista'=>[]];
    
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
  
  public function listar(){
    $datos = file_get_contents("php://input");
    $json = json_decode($datos);
    $id = $json->id;
    $calle = $json->calle;
    $numero = $json->numero;
    $agregar = Casa::listar();
    echo json_encode($json);
  }
}