<?php

use Micaela\App\Libs\Singleton;

require_once 'src/models/Casa.php';
require_once 'src/models/Persona.php';

class Alquiler {
  private $id;
  private $duracionMeses;
  private $costo;
  private $persona;
  private $casa;

  public function __construct($id, $duracionMeses, $costo, $persona, $casa)
  {
    $this->id = $id;
    $this->duracionMeses = $duracionMeses;
    $this->costo = $costo;
    $this->persona = $persona;
    $this->casa = $casa;
  }

  public static function alquilar(Persona $persona, Casa $casa, $duracionMeses, $costo){
    
  }

  public static function listar() {
    $pdo = Singleton::getInstancia()->getPdo();
    try {
      $query = $pdo->query("select id, persona_id, casa_id, duracionMeses, costo from alquiler");
      $alquiler = [];
      while ($row = $query->fetch()) {
        $alquiler = new Alquiler($row['id'], $row['persona_id'], $row['casa_id'], $row['duracionMeses'], $row['costo']);
        $alquiler[] = $alquiler;
      }
      return $alquiler;
    } catch (PDOException $e) {
      var_dump($e);
    } finally {
      $pdo = null;
    }
  }
 
  public function getCosto()
  {
    return $this->costo;
  }

  public function getPersona()
  {
    return $this->persona;
  }

  public function getCasa()
  {
    return $this->casa;
  }
}