<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listar Alquileres</title>
  <link rel="stylesheet" href="public/css/alquiler/listar.css" type="text/css">
</head>

<body>
  <table>
    <tr>
      <th>Id</th>
      <th>Persona</th>
      <th>Casa</th>
      <th>Precio</th>
      <th>Duracion En Meses</th>
    </tr>
    <tr>
      <?php for ($i = 0; $i < count($this->datos); $i++) {; ?>
      <td><?= $this->datos[$i]->getId(); ?></td>
      <td><?= $this->datos[$i]->getPersona()->getNombre(); ?></td>
      <td><?= $this->datos[$i]->getCasa()->getCalle(); ?></td>
      <td><?= $this->datos[$i]->getCosto(); ?></td>
      <td><?= $this->datos[$i]->getDuracionMeses(); ?></td>
    </tr>
    <?php }; ?>
  </table>
  <script src="public/js/alquiler/listar.js"></script>
</body>

</html>