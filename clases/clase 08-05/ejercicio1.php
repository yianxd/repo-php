<?php
$estudiantes=[
    'estudiante1'=>[
        'id'=>123,
        'primer apellido'=>'asd',
        'segundo apellido'=>'fgt',
        'nombres'=>'aa',
        'correo'=>'yjg@gmail.com',
        'telefono'=>321598,
        'ciudadResidencia'=>'soacha',
        'direccion'=>'direccion generica'
    ],
    'estudiante2'=>[
        'id'=>458,
        'primer apellido'=>'asd',
        'segundo apellido'=>'fgt',
        'nombres'=>'aa',
        'correo'=>'yjg@gmail.com',
        'telefono'=>321598,
        'ciudadResidencia'=>'soacha',
        'direccion'=>'direccion generica'
    ],
    'estudiante3'=>[
        'id'=>123,
        'primer apellido'=>'asd',
        'segundo apellido'=>'fgt',
        'nombres'=>'aa',
        'correo'=>'yjg@gmail.com',
        'telefono'=>321598,
        'ciudadResidencia'=>'soacha',
        'direccion'=>'direccion generica'
    ],
    'estudiante4'=>[
        'id'=>123,
        'primer apellido'=>'asd',
        'segundo apellido'=>'fgt',
        'nombres'=>'aa',
        'correo'=>'yjg@gmail.com',
        'telefono'=>321598,
        'ciudadResidencia'=>'soacha',
        'direccion'=>'direccion generica'
    ],
    'estudiante5'=>[
        'id'=>123,
        'primer apellido'=>'asd',
        'segundo apellido'=>'fgt',
        'nombres'=>'aa',
        'correo'=>'yjg@gmail.com',
        'telefono'=>321598,
        'ciudadResidencia'=>'soacha',
        'direccion'=>'direccion generica'
    ]
    ];
$c=1;
foreach($estudiantes as $estudiante){
    echo "Estudiante {$c}".'<br>';
    $c++;
    echo $estudiante['id'].'<br>';
    echo $estudiante['primer apellido'].'<br>';
    echo $estudiante['segundo apellido'].'<br>';
    echo $estudiante['nombres'].'<br>';
    echo $estudiante['correo'].'<br>';
    echo $estudiante['telefono'].'<br>';
    echo $estudiante['ciudadResidencia'].'<br>';
    echo $estudiante['direccion'].'<br>';
}
    
?>