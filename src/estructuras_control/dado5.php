<?php

$dado = rand(1, 6);

switch ($dado) {
    case 1:
        echo "<img src='../images/dado1.svg' />";
        break;
    case 2:
        echo "<img src='../images/dado2.svg' />";
        break;
    case 3:
        echo "<img src='../images/dado3.svg' />";
        break;
    case 4:
        echo "<img src='../images/dado4.svg' />";
        break;
    case 5:
        echo "<img src='../images/dado5.svg' />";
        break;
    case 6:
        echo "<img src='../images/dado6.svg' />";
        break;
}

?>