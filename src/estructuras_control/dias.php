<?php

$dias = rand(1, 7);
echo "El número de día es $dias ";

switch ($dias) {
    case 1:
        echo "y corresponde al lunes";
        break;
    case 2:
        echo "y corresponde al martes";
        break;
    case 3:
        echo "y corresponde al miércoles";
        break;
    case 4:
        echo "y corresponde al jueves";
        break;
    case 5:
        echo "y corresponde al viernes";
        break;
    case 6:
        echo "y corresponde al sábado";
        break;
    case 7:
        echo "y corresponde al domingo";
        break;
}

?>