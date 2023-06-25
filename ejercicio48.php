<!-- Abrir un archivo en php -->
<?php
$archivo = "./files/contenido.txt";
$archivoAbierto=fopen($archivo, "r");
$contenido=fread($archivoAbierto,filesize($archivo));

echo $contenido;
?>