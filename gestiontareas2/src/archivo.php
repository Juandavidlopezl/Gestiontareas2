<?php
// Código PHP para procesar datos o realizar consultas

// Ejemplo: obtener datos de una base de datos

$conexion = mysqli_connect("localhost", "usuario", "contraseña", "base_de_datos");
$resultado = mysqli_query($conexion, "SELECT * FROM usuarios");

while ($fila = mysqli_fetch_assoc($resultado)) {
  echo "<p>" . $fila["nombre"] . " - " . $fila["correo"] . "</p>";
}

mysqli_close($conexion);
?>
