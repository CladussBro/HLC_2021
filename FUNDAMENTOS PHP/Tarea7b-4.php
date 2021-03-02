<?php
    $a=23;
    $b="pepe";
    //probando el operador ++;
        print_r("Probando el operador ++");
        echo "<br>";
        echo ++$a; //Incrementa +1 $a=24
        echo "<br>";
        echo ++$a*2; //Variable a=25*2=50 $a=25
        echo "<br>";
        echo ++$b; //Incrementa la última letra "e" a "f"
        echo "<br>";
        echo ++$b*2; //Error ya que no es valor númerico
        echo "<br>";
    //probando el operador --;
        print_r("Probando el operador --");
        echo "<br>";
        echo --$a*2; //Variable a=25-1=24*2=48
        $b="pepe"; //Declara de nuevo la variable b
        echo "<br>";
        $b="pepe"; //Declara de nuevo la variable b
        echo "<br>";
    //probando el operador +=n;
        print_r("Probando el operador +=n");
        echo "<br>";
        echo $a+=5; //Variable $a=24+5=29 $a=29
        echo "<br>";
        echo $a; //Imprime el valor guardado anteriormente (29)
        echo "<br>";
        echo 2*$a+=5; //29+5=34 $a=34*2=68 $a=34
        echo "<br>";
        echo 2*$a; //$a=34*2=68
        echo "<br>";
        echo $b+=5; //Error ya que no es valor númerico y declara $b=5
        echo "<br>";
        echo $b; //Imprime el valor declarado anteriormente (5)
        echo "<br>";
        echo 2*$b+=5; //$b=5+5=10*2=20 $b=10
        echo "<br>";
        echo 2*$b; //10*2=20
        echo "<br>";
    //probando el operador –=n;
        print_r("Probando el operador -=n");
        echo "<br>";
        echo $a-=5; //$a=34-5=29 $a=29
        echo "<br>";
        echo $a; //$a=29
        echo "<br>";
        echo 2*$a-=5; //$a=29-5=24*2=48 $a=24
        echo "<br>";
        echo 2*$a; //24*2=48
        echo "<br>";
        echo $b-=5; //$b=10-5=5 $b=5
        echo "<br>";
        echo $b; //$b=5
        echo "<br>";
        echo 2*$b-=5; //$b=5-5=0*2=0 $b=0
        echo "<br>";
        echo 2*$b; //$b=0*2=0
        echo "<br>";
    //probando operadores de post-incremento;
        print_r("Probando el operadores de post-incremento");
        echo "<br>";
        echo $a++; //$a=24 se incrementa +1 cuando se vuelva a imprimir
        echo "<br>";
        echo $a; //$a=25
        echo "<br>";
        echo 2*$a++; //$a=25*2=50 $a=25 +1 incrementa cuando se vuelva a imprimir
        echo "<br>";
        echo 2*$a; //$a=26*2=52 $a=26
        echo "<br>";
        echo $a--; //$a=26 -1 cuando se vuelva a imprimir
        echo "<br>";
        echo $a; //$a=25
        echo "<br>";
        echo 2*$a--; //$a=25*2=50 -1 cuando se vuelva a imprimir $a=25
        echo "<br>";
        echo 2*$a; //$a=24*2=48 $a=24
?>