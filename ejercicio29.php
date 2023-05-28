<!-- Conexion de PHP con MySQL -->
<?php

$server = "localhost";
$user = "root";
$password = "123456";

try {
    $connection = new PDO("mysql:host=$server;dbname=album", $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Established connection";
} catch (PDOException $error) {
    echo "Failed connection".$error;
}

?>