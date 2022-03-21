<?php

// Recibimos las variables por POST
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$edad = $_POST["edad"];

// Mostramos las variables
echo "Nombre: $nombre";
echo "<br>";
echo "Apellidos: $apellidos";
echo "<br>";
echo "Edad: $edad";

?>