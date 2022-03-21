<?php

// Definimos una constante con el número de elementos
define("NUM_ELEMENTOS", 10);

// Declaramos una variable como array
$numeros = array();

// Inicializamos el array
for ($i = 0; $i < NUM_ELEMENTOS; $i++) {
    $numeros[$i] = rand(1, 30);
}

// Imprimimos el contenido del array
for ($i = 0; $i < NUM_ELEMENTOS; $i++) {
    echo $numeros[$i];
    echo "<br>";
}

?>