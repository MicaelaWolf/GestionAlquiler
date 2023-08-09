<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alquilar una casa</title>
  <link rel="stylesheet" href="public/css/alquiler/alquilar.css" type="text/css">
</head>

<body>
  <form action="index.php?c=alquiler&m=alquilar" method="post">
    <input type="text" name="Persona" id="persona">
    <input type="text" name="Casa" id="casa">
    <input type="number" name="Duración en Meses" id="tiempo">
    <button type="reset">Borrar</button>
    <input type="submit" value="Enviar">
  </form>
  <script src="public/js/alquiler/alquilar.js"></script>
</body>

</html>