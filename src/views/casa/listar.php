<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listar casas</title>
  <link rel="stylesheet" href="public/css/casa/listar.css" type="text/css">
</head>

<body>
  <table>
    <tr>
      <th>Id</th>
      <th>Calle</th>
      <th>Número</th>
    </tr>
    <tr>
      <?php for ($i = 0; $i < count($this->datos); $i++) {; ?>
      <td><?= $this->datos[$i]->getId(); ?></td>
      <td><?= $this->datos[$i]->getCalle(); ?></td>
      <td><?= $this->datos[$i]->getNumero(); ?></td>
    </tr>
    <?php }; ?>
  </table>
  <script src="public/js/casa/listar.js"></script>
</body>

</html>