<?php
class connection
{
    private $server = "localhost";
    private $user = "root";
    private $password = "123456";
    private $connection;
    public function __construct()
    {
        try {
            $this->connection = new PDO("mysql:host=$this->server;dbname=album", $this->user, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            return "Error connecting to the database" . $e;
        }
    }

    public function run($sql)
    {
        $this->connection->exec($sql);
        return $this->connection->lastInsertId();
    }
    public function querying($sql){
        $sentence=$this->connection->prepare($sql);
        $sentence->execute();
        return $sentence->fetchAll();
    }
}
?>