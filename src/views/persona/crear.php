<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear Persona</title>
  <link rel="stylesheet" href="public/css/persona/crear.css" type="text/css">
</head>

<body>
  <form action="index.php?c=persona&m=nuevo" method="post">
    <input type="number" placeholder="CI" name="ci">
    <input type="text" placeholder="Nombre" name="nombre">
    <button type="reset">Borrar</button>
    <input type="submit" value="Enviar">
  </form>
  <script src="public/js/persona/crear.js"></script>
</body>

</html>