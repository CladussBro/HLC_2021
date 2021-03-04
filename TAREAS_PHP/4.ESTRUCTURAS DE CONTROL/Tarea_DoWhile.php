<?php
$filas=5;$columnas=3;
print("<table border=2 width=400 align=center>");
do{
    echo "<tr>";
    $filas--;
    do{
        echo "<td>";
        print_r ("fila: ".$filas." columna:".$columnas);
        print ("</td>");
        $columnas--;
    }while($columnas>0);
    $columnas=3;
    echo "</tr>";
}while($filas>0);
print "</table>";
?>