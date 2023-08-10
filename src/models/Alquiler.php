<?php

use Micaela\App\Libs\Singleton;

require_once 'src/models/Casa.php';
require_once 'src/models/Persona.php';

class Alquiler {
  private $id;
  private $persona;
  private $casa;
  private $duracionMeses;
  private $costo;
  public function __construct($id, $persona, $casa, $duracionMeses, $costo)
  {
    $this->id = $id;
    $this->persona = $persona;
    $this->casa = $casa;
    $this->duracionMeses = $duracionMeses;
    $this->costo = $costo;

  }

  public static function alquilar(Persona $persona, Casa $casa, $duracionMeses, $costo){
    $costo=$costo*$duracionMeses;
    $mensaje= "La {$persona->getNombre()} ha alquilado la casa en {$casa->getCalle()} por {$duracionMeses} meses, a un costo de {$costo} al mes.";
    return $mensaje;
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

  public function getId()
  {
    return $this->id;
  }

  public function getDuracionMeses()
  {
    return $this->duracionMeses;
  }
}