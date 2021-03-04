<?php
// Este comentario no se verá en la página
echo "Esto se leerá <BR> "; // Esto no se leerá
/* Este es un comentario de
múltiples líneas y no se acabará
hasta que no cerremos así.... */
echo "Este es el segundo comentario que se leerá<BR>";
# Este es un comentario tipo shell que tampoco se leerá
# Este, tampoco
echo ("Aquí el tercer texto visible<BR>"); #comentario invisible
/* Cuidado con anidar
# comentarios
# multilinea con estos
al PHP no le gustan */

//Print sin paréntesis muestra lo que hay dentro de las comillas y se le añade un salto de línea
print "Esto es un print normal <br>";
/*Print con paréntesis muestra lo que hay dentro de las comillas y se le añade un salto de línea*/
print ("Esto es un print() <br>");
#Se le añade el contenido a la variable antes de imprimirla
$a=("Esto es un print_r() <br>");
    print_r ($a); 
///Echo sin paréntesis muestra lo que hay dentro de las comillas
echo "Esto es un echo";
?>