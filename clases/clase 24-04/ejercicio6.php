<?php
$ladoCuadrado=8;
$perimetroc=$ladoCuadrado*4;
$areaC=$ladoCuadrado*$ladoCuadrado;
echo "Cuadrado"."<br>"."area: ".$areaC."<br>"."perimetro: ".$perimetroc."<br>";
//////////
$baseTriangulo=9;
$alturaTraingulo=8;
$ladoUnoTrinagulo=8;
$ladoDosTraingulo=8;
$areaT=($baseTriangulo*$alturaTraingulo)/2;
$perimetroT=$baseTriangulo+$ladoUnoTrinagulo+$ladoDosTraingulo;
echo "Triangulo"."<br>"."area: ".$areaT."<br>"."perimetro: ".$perimetroT."<br>";
/////////////
$baseRectangulo=8;
$alturaRectangulo=6;
$areaR=$baseRectangulo* $alturaRectangulo;
$perimetroR=($baseRectangulo*2)+($alturaRectangulo*2);
echo "Rectangulo"."<br>"."area: ".$areaR."<br>"."perimetro: ".$perimetroR;
?>