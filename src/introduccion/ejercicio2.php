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