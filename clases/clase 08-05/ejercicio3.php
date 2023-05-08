<?php
/*
function funcionPHP(int $num1, int $num2, array $arreglo) {

    array_push($arreglo,$num1);
    array_push($arreglo,$num2);
    return $arreglo;
}
$arreglo=array();
$a=funcionPHP(2,1,$arreglo);
*/
function funcionPHP(int $num1, int $num2) {
    $arreglo=array();
    array_push($arreglo,$num1);
    array_push($arreglo,$num2);
    return $arreglo;
}
$a=funcionPHP(2561,11564);
foreach($a as $aa){
    echo $aa.'<br>';
} 
?>