<?php

namespace Micaela\App\models;

use JsonSerializable;
use PDOException;
use Micaela\App\Libs\Singleton;

class Casa implements JsonSerializable
{
  private $id;
  private $calle;
  private $numero;
  private $alquiler = [];

  //hacer alquiler un parametro opcional
  public function __construct($id, $calle, $numero, array $alquiler = null)
  {
    $this->id = $id;
    $this->calle = $calle;
    $this->numero = $numero;
    $this->alquiler = $alquiler;
  }

  private static function arrayACasa($item)
  {
    $casa = new Casa(
      $item['id'],
      $item['calle'],
      $item['numero']
    );
    return $casa;
  }

  public static function listar()
  {
    $pdo = null;
    $query = null;
    $items = [];
    $pdo = Singleton::getInstancia()->getPdo();
    try {
      $query = $pdo->query('SELECT id, calle, numero FROM casa');
      while ($row = $query->fetch()) {
        $item = self::arrayACasA($row);
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
  public function getCalle()
  {
    return $this->calle;
  }

  /**
   * Get the value of numero
   */ 
  public function getNumero()
  {
    return $this->numero;
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
      "id"=>intval($this->id),
      "calle"=>$this->calle,
      "numero"=>$this->numero
    ];
  }
}