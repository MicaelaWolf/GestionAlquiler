<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario nuevos productos</title>
  <link rel="stylesheet" href="public/css/producto/crear.css" type="text/css">
</head>

<body>
  <form action="index.php?c=producto&m=nuevo" method="post">
    <input type="text" placeholder="Codigo" name="codigo">
    <textarea name="descripcion" cols="30" rows="10">Describe el producto...</textarea>
    <input type="number" step=".01" name="precio">
    <input type="date" placeholder="Fecha" name="fecha">
    <button type="reset">Borrar</button>
    <input type="submit" value="Enviar">
  </form>
  <script src="public/js/producto/crear.js"></script>
</body>

</html>