<?php

namespace Micaela\App\models;

use PDOException;
use Micaela\App\models\Casa;
use Micaela\App\Libs\Singleton;
use Micaela\App\models\Persona;

//elimino los require_once uso use
//require_once 'src/models/Casa.php';
//require_once 'src/models/Persona.php';

class Alquiler
{
  private $id;
  private $persona;
  private $casa;
  private $duracionMeses;
  private $costo;
  public function __construct($id, $persona, $casa, $duracionMeses, $costo)
  {
    $this->id = $id;
    //persona debe ser instancia de persona
    //persona debe ser instancia de persona
    $this->persona = $persona;
    //casa debe ser instancia de casa
    $this->casa = $casa;
    $this->duracionMeses = $duracionMeses;
    $this->costo = $costo;
  }

  public static function alquilar(Persona $persona, Casa $casa, $duracionMeses, $costo)
  {
    //debe realizar un insert
    $costo = $costo * $duracionMeses;
    $mensaje = "La {$persona->getNombre()} ha alquilado la casa en {$casa->getCalle()} por {$duracionMeses} meses, a un costo de {$costo} al mes.";
    return $mensaje;
  }

  public static function listar()
  {
    $pdo = Singleton::getInstancia()->getPdo();
    $alquileres = [];
    try {
      /* consulta de listado de alquileres */
      $sql = 'SELECT c.id as idC, 
      c.calle, 
      c.numero, 
      p.id as idP, 
      p.nombre, 
      a.id as idA, 
      a.costo,
      a.duracionMeses as duracion 
      FROM alquiler a
INNER JOIN persona p ON a.persona_id = p.id
INNER JOIN casa c ON a.casa_id = c.id';
      $query = $pdo->query($sql);
      while ($row = $query->fetch()) {
        //casa 
        $casa = new Casa(
          $row['idC'],
          $row['calle'],
          $row['numero']
        );
        ///persona
        $persona = new Persona($row['idP'], $row['nombre']);
        $alquiler = new Alquiler(
          $row['idA'],
          $persona,
          $casa,
          $row['duracion'],
          $row['costo']
        );
        $alquileres[] = $alquiler;
      }
      return $alquileres;
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