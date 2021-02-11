<?php
    # determinando el tipo de variable
    $a1=347;
    $a2=2147483647;
    $a3=-2147483647;
    $a4=23.7678;
    $a6="347";
    $a8="Solo literal";
    $a9="12.3 Literal con número";
    $a10="";
    
    #forzando los tipos
    echo ((real)$a1),"<br>"; //Lo imprime como es
    echo ((double)$a2),"<br>"; //Igual que lo anterior
    echo ((float)$a3),"<br>"; //Igual que lo anterior
    echo ((integer)$a4),"<br>"; //Quita decimales
    echo ((int)$a6),"<br>"; //Convierte la cadena a números
    echo ((int)$a8),"<br>"; //Convierte la cadena al número 0
    echo ((double)$a9),"<br>"; // Imprime los números
    echo ((int)$a10),"<br>"; //Imprime un 0, ya que está vacío
 
?> 