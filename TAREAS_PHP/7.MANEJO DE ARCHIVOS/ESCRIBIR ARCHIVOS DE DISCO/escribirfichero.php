<?php
    $file = fopen ('fichero.txt', 'w');
    fwrite($file, "Añadido 1 ");
    fwrite($file,"AñadiDo 2");
    fclose($file);
    file_put_contents('fichero.txt', "Hola Mundo");
 ?>