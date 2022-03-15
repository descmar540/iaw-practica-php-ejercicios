<?php

$nombre = "Peper";
$apellido1 = "López";
$apellido2 = "López";
$edad = 20;
$peso = 80.5;

echo "Nombre: <b>$nombre</b>";

// para concatenar, con (.)
# echo "nombre: <b>" . $nombre . "</b>";

// para depurar el contenido de variables
# print_r($nombre);

//
echo "<pre>";
var_dump($nombre);
echo "</pre>";

// para depurar el contenido de variables
$lista = array("nombre" => "Pepe", "edad" => 30, "peso" => 80);

echo "<pre>";
print_r($lista);
echo "</pre>";

?>