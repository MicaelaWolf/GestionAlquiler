<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alquilar una casa</title>
  <link rel="stylesheet" href="public/css/alquiler/alquilar.css" type="text/css">
</head>

<body>
  <form action="index.php?c=alquilar&m=alquilar" method="post">

    <label for="">persona</label>
    <input type="text" name="Cedula" id="persona_id">
    <input type="text" name="Persona" id="personaCliente">

    <label for="">casa</label>
    <pre>
    <?php
    // var_dump($this->datos->casas); 
    ?>
</pre>
    /* hacer esto mismo para persona
    <select name="casaId" id="">
      <?php foreach ($this->datos->casas as $casa) {
      ?><option value="<?= $casa->getId(); ?>">
          <?= $casa->getNumero() . $casa->getCalle() ?>
        </option>
      <?php }; ?>
    </select>
    <input type="text" name="Calle" id="casaAlquiler">
    <input type="number" name="Numero" id="numero">

    <input type="number" name="Duración en Meses" id="duracion">
    <input type="number" name="Costo" id="costoAlquiler">
    <button type="reset">Borrar</button>
    <input type="submit" value="Enviar">
  </form>
  <?php

  /* eso no va en esta parte
  $id->persona_id;
  $personaCliente->personaCliente;
  $casaAlquiler->casaAlquiler;
  $numero->numero;
  $duracion->duracion;
  $costoAlquiler->costoAlquiler;
  $alquilerController=new Alquiler_Controller();
  $mensajeAlquilar = $alquilerController->alquilar($id, $personaCliente, $casaAlquiler, $numero, $duracion, $costoAlquiler);
  
  echo $mensajeAlquilar; */ ?>
  <script src="public/js/alquiler/alquilar.js"></script>
</body>

</html>