# Ejercicios PHP

En esta práctica se van a realizar ciertos ejercicios utilizando el lenguaje de programación PHP.

> Bloque de ejercicios de introducción

Este primer apartado consiste en realizar scrips PHP que muestren cierta **información**, como por ejemplo, el ejecicio 2, donde se piden una serie de variables para mostrar información como *dirección IP del servidor donde se ejecuta el script*, *dirección IP del cliente*, etc.

```
<?php

echo "IP del servidor: " . $_SERVER["SERVER_ADDR"];
echo "</br>";
echo "Nombre del servidor: " . $_SERVER["SERVER_NAME"];
echo "</br>";
echo "Software del servidor: " . $_SERVER["SERVER_SOFTWARE"];
echo "</br>";
echo "Información del cliente: " . $_SERVER["HTTP_USER_AGENT"];
echo "</br>";
echo "Direccion del cliente: " . $_SERVER["REMOTE_ADDR"];
echo "</br>";

?>
```

 > Bloque de estructuras de control

 En este apartado, se hace uso de **estructuras de control** como *if-else*, *switch* o *case*.
Un ejemplo del ejercicio 3, correspondiente a mostrar los días de la semana.

```
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
```

 > Bloque de estructuras de control

Este bloque está dedicado a los *bucles*, entre los que encontramos el bucle *for*, y además se añaden formatos de tabla. Por ejemplo, el ejercicio 5, en el que encontramos un *for* dentro de otro para mostrar las tablas de multiplicar del 1 al 10.

```
<?php

for ($numero = 1; $numero <= 10; $numero++) {

    echo "<h1>Tabla del $numero</h1>";
    echo "<table border='1'>";

    for ($i = 0; $i <= 10; $i++) {
        echo "<tr>";

        echo "<td>$numero</td>";
        echo "<td>x</td>";
        echo "<td>$i</td>";
        echo "<td>=</td>";
        echo "<td>". ($numero * $i) ."</td>";

        echo "</tr>";
    }

    echo "</table>";

}

?>
```