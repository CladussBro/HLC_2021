<?php
    $a=12; //en binario 1100;
    $b=23; //en binario 10111;
    $A="12"; //en binario 110001110010;
    $B="23"; //en binario 110010110011;
    //operador &;
    //Los bits activos en ambos son activados
    print_r($a&$b);
    echo "<br>";
    print_r($A&$B);
    echo "<br>";
    //operador |;
    //Los bits activos ya sea en a o b son activados
    print_r($a|$b);
    echo "<br>";
    print_r($A|$B);
    echo "<br>";
    //operador ^;
    //Los bits activos de a o b son activados, pero sólo de uno de ellos
    print_r($a^$b);
    print_r($A^$B);
    echo "<br>";
    //repite el código para el operador <<;
    //Desplaza los bits de a tantos pasos a la izquierda como tenga b, multiplicar por dos
    print_r('Operadores "<<" ');
    print_r($a<<$b);
    echo "<br>";
    //repite el código para el operador >>;
    //Desplaza los bits de a tantos pasos a la derecha como tenga b, dividir por dos
    print_r('Operadores ">>" ');
    print_r($a>>$b);
    echo "<br>";
    //operador ~
    print_r(~$a);
?>