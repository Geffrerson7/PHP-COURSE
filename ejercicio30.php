<!-- Leer datos de MySQL con PHP -->
<?php

$server = "localhost";
$user = "root";
$password = "123456";

try {
    $connection = new PDO("mysql:host=$server;dbname=album", $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM `fotos`";

    $sentence = $connection->prepare($sql);
    $sentence->execute();
    $result = $sentence->fetchAll();

    foreach ($result as $foto) {
        echo $foto['nombre'] . "<br/>";
    }

    echo "Established connection";
} catch (PDOException $error) {
    echo "Failed connection" . $error;
}

?>