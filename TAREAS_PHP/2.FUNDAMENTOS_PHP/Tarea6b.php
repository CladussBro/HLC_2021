<?php
$color = "verde";
$$color[3] = "mejor azul<br>";
print $$color[3];
//Imprime el nuevo valor asociado
$color2 = array("verde","azul","negro","amarillo","rosa");
print $color2[3];
//En este caso imprime el tercer valor del array color2
?>