<?php
# Defino las variables
$Clau = "Clau";
$Texto="Me llamo $Clau";

echo "<br> El valor de la variable es: ",$Texto;

function cambiaTexto(){
	$Claudia = "Claudia";
	$Texto="Ahora soy $Claudia";
	echo "<br>",$Texto;
}
cambiaTexto();
echo "<br>",$Texto;
?>