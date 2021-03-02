<?php
$filas=5;$columnas=7;
print("<table border=2 width=400 align=center>");
for($i=0; $i < $filas; $i++){
    echo "<tr>";
    for($k=0; $k < $columnas; $k++){
        echo "<td>";
        print "fila: ".$i." columna: ".$k;
        print ("</td>");
    }
    echo "</tr>";
}
echo "</table>"
?>