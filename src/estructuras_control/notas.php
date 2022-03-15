<?php

$nota = rand(0, 10);

echo "La nota es $nota </br>";

if ($nota < 5) {
    echo "Insuficiente";
} else if ($nota < 6) {
    echo "Suficiente";
} else if ($nota < 7) {
    echo "Bien";
} else if ($nota < 9) {
      echo "Notable";
} else {
    echo "Sobresaliente";
}

?>