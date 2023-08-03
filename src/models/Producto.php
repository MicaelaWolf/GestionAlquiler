<?php

namespace Micaela\App\Models;

use Micaela\App\Libs\Singleton;
use PDOException;
use Micaela\App\Libs\Spdo;

class Producto
{
  private $id;
  private $codigo;
  private $descripcion;
  private $precio;
  private $fecha;

  public function __construct($id, $codigo, $descripcion, $precio, $fecha)
  {
    $id = $id;
    $codigo = $codigo;
    $descripcion = $descripcion;
    $precio = $precio;
    $fecha = $fecha;
  }

  public static function listar()
  {
    $pdo = Singleton::getInstancia()->getPdo();
    try {
      $query = $pdo->query("select id_productos, codigo, descripcion, precio, fecha from productos");
      $productos = [];
      while ($row = $query->fetch()) {
        $producto = new Producto($row['id_productos'], $row['codigo'], $row['descripcion'], $row['precio'], $row['fecha']);
        $productos[] = $producto;
      }
      return $productos;
    } catch (PDOException $e) {
      var_dump($e);
    } finally {
      $pdo = null;
    }
  }

  /**
   * Get the value of id
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Get the value of codigo
   */
  public function getCodigo()
  {
    return $this->codigo;
  }

  /**
   * Get the value of descripcion
   */
  public function getDescripcion()
  {
    return $this->descripcion;
  }

  /**
   * Get the value of precio
   */
  public function getPrecio()
  {
    return $this->precio;
  }

  /**
   * Get the value of fecha
   */
  public function getFecha()
  {
    return $this->fecha;
  }
}