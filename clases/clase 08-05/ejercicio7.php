<?php
$promedio='a';
$tipo=gettype($promedio);
echo $tipo;

if($promedio==0 and $promedio<50){
    echo 'rendimiento bajo';
}
else if ($promedio>=50 and $promedio<70){
    echo 'rendimiento regular';
}
else if ($promedio>=70 and $promedio<=80){
    echo 'rendimiento regular';
}

else if ($promedio>=80 and $promedio<95){
    echo 'rendimiento alto';
}

else if ($promedio>=95 and $promedio<100){
    echo 'rendimiento superior';
}
else {
    echo 'dato invalido';
}
?>