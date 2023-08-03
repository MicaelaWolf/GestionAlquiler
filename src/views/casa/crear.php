<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear casas</title>
  <link rel="stylesheet" href="public/css/casa/crear.css" type="text/css">
</head>

<body>
  <form action="index.php?c=casa&m=nuevo" method="post">
    <input type="number" name="id">
    <input type="text" placeholder="Calle" name="calle">
    <input type="number" name="numero">
    <button type="reset">Borrar</button>
    <input type="submit" value="Enviar">
  </form>
  <script src="public/js/casa/crear.js"></script>
</body>

</html>