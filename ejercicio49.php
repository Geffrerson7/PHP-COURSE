<!-- Escritura de archivos -->
<?php
$nombreArchivo = "./files/archivo.txt";
$contenidoArchivo="Hola mundo";
$archivoCrear=fopen($nombreArchivo,"w");

fwrite($archivoCrear,$contenidoArchivo);

fclose($archivoCrear);

?>