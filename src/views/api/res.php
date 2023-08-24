<?php 

header("Content-type:aplication/json; charset:utf-8");
http_response_code($this->datos->codigo);
echo json_encode($this->datos->respuesta);
