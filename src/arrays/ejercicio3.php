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

// Calcular el máximo
$max = $numeros[0];
$pos_maximo = 0;
for ($i = 1; $i < NUM_ELEMENTOS; $i++) {
    if ($numeros[$i] > $max) {
        $max = $numeros[$i];
        $pos_maximo = $i;
    }
}
echo "El valor máximo es: $max";
echo "<br>";
echo "El máximo está en la posición: $pos_maximo";

?>