<?php
$filas=1;
$columnas=6;
print("<table border=2 width=400 align=center>");
for($i=0; $i < $filas; $i++){
    echo "<tr>";
    for($k=0; $k < $columnas; $k++){
        echo "<td>";
        print rand(1,49);
        print ("</td>");
    }
    echo "</tr>";
}
echo "</table>"
?>