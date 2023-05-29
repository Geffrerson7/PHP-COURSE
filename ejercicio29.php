<!-- Conexion de PHP con MySQL e Inserción de datos-->
<?php

$server = "localhost";
$user = "root";
$password = "123456";

try {
    $connection = new PDO("mysql:host=$server;dbname=album", $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO fotos (nombre, ruta) VALUES ('Community Day', 'mewtwo.jpg');";

    $connection->exec($sql);

    echo "Established connection";
} catch (PDOException $error) {
    echo "Failed connection" . $error;
}

?>