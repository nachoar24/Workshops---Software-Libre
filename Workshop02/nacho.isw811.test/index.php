<?php
date_default_timezone_set('America/Costa_Rica');

$mensaje = "Sitio funcionando correctamente";
?>

<!DOCTYPE html>
<html>
<head>
    <title>nacho.isw811.test</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1>Workshop 02</h1>

<h2>Ignacio Araya</h2>

<p><strong>Curso:</strong> ISW811</p>

<p><strong>Actividad:</strong> Workshop 02</p>

<p>
Este sitio fue creado como parte de la Actividad 2 del Workshop 02
para demostrar la configuración de un segundo Virtual Host
en Apache.
</p>

<h3>Prueba PHP</h3>

<p><?php echo $mensaje; ?></p>

<p>
Fecha y hora actual:
<?php echo date('d/m/Y H:i:s'); ?>
</p>

<p>
Servidor:
<?php echo $_SERVER['SERVER_SOFTWARE']; ?>
</p>

</body>
</html>
