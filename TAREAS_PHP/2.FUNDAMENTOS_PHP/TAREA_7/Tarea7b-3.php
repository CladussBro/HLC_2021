<?php 
$langosta=80;
$angula=80;
$caviar=300;

if($langosta>50 && $angula>70 || $langosta>80 && $caviar>500 || $angula>70 && $caviar>500){
    echo ("cierto");
}else{
    echo ("falso");
}
?>