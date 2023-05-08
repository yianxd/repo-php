<?php
$numeroUno=8;
$numeroDos=2;
echo $numeroUno." ".$numeroDos;
$auxiliar=$numeroDos;
$numeroDos=$numeroUno;
$numeroUno=$auxiliar;
echo "<br>".$numeroUno." ".$numeroDos;
?>