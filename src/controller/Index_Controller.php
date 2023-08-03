<?php

use Micaela\App\Libs\Controlador;

class Index_Controller extends Controlador
{
  public function index()
  {
    $this->cargarVista('index/index');
  }
}
