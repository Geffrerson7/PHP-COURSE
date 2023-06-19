<!-- Función para JSON decode -->
<?php

$jsonContenido = '[
    {"nombre":"Gefferson", "apellido":"Casasola"},
    {"nombre":"Max", "apellido":"Casasola"}
]';

    $resultado = json_decode($jsonContenido);

    foreach ($resultado as $persona){
        echo ($persona->nombre)." ".($persona->apellido)."<br/>";
    }

?>