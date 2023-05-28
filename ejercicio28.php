<!-- Métodos estáticos PHP -->
<?php

class UnaClase{
    public static function unMetodo(){
        echo "Hola soy un método estático";
    }
}
$objeto=new UnaClase();
$objeto->unMetodo();

unaClase::unMetodo();
?>