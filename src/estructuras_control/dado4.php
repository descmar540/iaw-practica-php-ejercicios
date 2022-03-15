<?php

$dado = rand(1, 6);

if ($dado == 1) {
    echo "<img src='../images/dado1.svg' />";
} else if ($dado == 2) {
    echo "<img src='../images/dado2.svg' />";
} else if ($dado == 3) {
    echo "<img src='../images/dado3.svg'/>";
} else if ($dado == 4) {
    echo "<img src='../images/dado4.svg' />";
} else if ($dado == 5) {
    echo "<img src='../images/dado5.svg' />";
} else {
    echo "<img src='../images/dado6.svg' />";
}

?>

