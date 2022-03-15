<?php

# Ejercicio cara o cruz

$moneda = rand(0, 1);

if ($moneda == 0) {
    echo "<img src='../images/cruz.jpeg' />";
} else {
    echo "<img src='../images/cara.jpg' />";
}

?>