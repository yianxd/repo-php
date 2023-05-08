<?php
/*
function fun(string $var1,string $var2,string $var3,array arreglo){
    array_push($arreglo,$var1);
    array_push($arreglo,$var2);
    array_push($arreglo,$var3);
    return $arreglo;
}
$arreglo=array();
$a=fun('a','b','c',$arreglo);
*/
function fun(string $var1,string $var2,string $var3) {
    $arreglo=array();
    array_push($arreglo,$var1);
    array_push($arreglo,$var2);
    array_push($arreglo,$var3);
    return $arreglo;
}

$a=fun('a','b','c');
foreach($a as $aa){
    echo $aa.'<br>';
}
?>