<?php

// Definimos la funcion: inicializar_array
// Entrada: 
// - $numero_de_elementos
// - $min
// - $max
// Salida:
// - $lista
function inicializar_array($numero_de_elementos, $min,$max) {
    $lista = array();

    for ($i = 0; $i < $numero_de_elementos; $i++) {
        $lista[$i] = rand($min, $max);
    }

    return $lista;
}

function imprimir_array($lavariablequesea) {
    foreach($lavariablequesea as $elemento) {
        echo $elemento;
        echo "<br>";
    }
}

?>