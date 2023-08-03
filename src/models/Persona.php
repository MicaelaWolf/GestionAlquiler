<?php

class Casa
{
  private $id;
  private $nombre;
  private $alquiler = [];

  public function __construct($id, $nombre, array $alquiler)
  {
    $this->id = $id;
    $this->nombre = $nombre;
    $this->alquiler = $alquiler; 
  }
  /**
   * Get the value of calle
   */
  public function getNombre()
  {
    return $this->nombre;
  }
}