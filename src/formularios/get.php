<?php

// Recibimos las variables por GET
$nombre = $_GET["nombre"];
$apellidos = $_GET["apellidos"];
$edad = $_GET["edad"];

// Mostramos las variables
echo "Nombre: $nombre";
echo "<br>";
echo "Apellidos: $apellidos";
echo "<br>";
echo "Edad: $edad";

?>