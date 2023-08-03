<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listar</title>
  <link rel="stylesheet" href="public/css/producto/listar.css" type="text/css">
</head>

<body>

  <table>
    <tr>
      <th>Id</th>
      <th>Codigo</th>
      <th>Descripcion</th>
      <th>Precio</th>
      <th>Fecha</th>
    </tr>
    <tr>
      <?php for ($i = 0; $i < count($this->datos); $i++) {; ?>
      <td><?= $this->datos[$i]->getId(); ?></td>
      <td><?= $this->datos[$i]->getCodigo(); ?></td>
      <td><?= $this->datos[$i]->getDescripcion(); ?></td>
      <td><?= $this->datos[$i]->getPrecio(); ?></td>
      <td><?= $this->datos[$i]->getFecha(); ?></td>
    </tr>
    <?php }; ?>
  </table>

  <script src="public/js/producto/listar.js"></script>
</body>

</html>