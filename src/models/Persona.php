<?php

namespace Micaela\App\models;

use JsonSerializable;
use PDOException;
use Micaela\App\Libs\Singleton;

class Persona implements JsonSerializable
{
  private $id;
  private $nombre;
  private $alquiler = [];

  public function __construct($id, $nombre, array $alquiler = [])
  {
    $this->id = $id;
    $this->nombre = $nombre;
    $this->alquiler = $alquiler;
  }

  private static function arrayAPersona($item)
  {
    $persona = new Persona(
      $item['id'],
      $item['nombre']
    );
    return $persona;
  }

  public static function listar()
  {
    $pdo = null;
    $query = null;
    $items = [];
    $pdo = Singleton::getInstancia()->getPdo();
    try {
      $query = $pdo->query('SELECT id, nombre FROM persona');
      while ($row = $query->fetch()) {
        $item = self::arrayAPersona($row);
        $items[] = $item;
      }
      return $items;
    } catch (PDOException $th) {
      //throw $th;
    } finally {
      $pdo = null;
    }
  }
  
  /**
   * Get the value of calle
   */
  public function getNombre()
  {
    return $this->nombre;
  }

  /**
   * Get the value of id
   */ 
  public function getId()
  {
    return $this->id;
  }

  public function jsonSerialize()
  {
    return [
      "id" => intval($this->id),
      "nombre" => $this->nombre
    ];
  }
}