<?php

namespace Micaela\App\models;

class Casa
{
  private $id;
  private $calle;
  private $numero;
  private $alquiler = [];

  //hacer alquiquier un parametro opcionals
  public function __construct($id, $calle, $numero, array $alquiler = [])
  {
    $this->id = $id;
    $this->calle = $calle;
    $this->numero = $numero;
    $this->alquiler = $alquiler;
  }
  /**
   * Get the value of calle
   */


  public function getCalle()
  {
    return $this->calle;
  }
}