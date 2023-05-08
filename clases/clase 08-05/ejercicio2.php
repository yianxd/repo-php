<?php
$arreglo1=[
    'articulo1'=>[
        'codigo'=>'5451',
        'descripcion'=>'descripcion 1',
        'precio'=>100.99,
        'activo'=>FALSE,
        'stock'=>12
    ],
    'articulo2'=>[
        'codigo'=>'3215',
        'descripcion'=>'descripccion 2',
        'precio'=>55.99,
        'activo'=>TRUE,
        'stock'=>0
    ],
    'articulo3'=>[
        'codigo'=>'1654',
        'descripcion'=>'descripccion 3',
        'precio'=>77.69,
        'activo'=>TRUE,
        'stock'=>56
    ],
    'articulo4'=>[
        'codigo'=>'1542',
        'descripcion'=>'descripcion 4',
        'precio'=>150.99,
        'activo'=>FALSE,
        'stock'=>15
    ],
    'articulo5'=>[
        'codigo'=>'7885',
        'descripcion'=>'descripcion 5',
        'precio'=>12.99,
        'activo'=>FALSE,
        'stock'=>4
    ]
];
foreach($arreglo1 as $a){
    echo $a['activo'];
}
?>