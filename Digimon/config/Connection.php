<?php

// Classe de conexão
class Connection
{
    // Propriedades
    private $server;
    private $database;
    private $uid;
    private $password;

    function __construct()
    {
        $this->server = "localhost";              // servidor
        $this->database = "digimon_database";     // nome do banco
        $this->uid = "root";                      // usuário
        $this->password = "";                     // senha
    }

    public function Connect()
    {
        try {
            // Iniciar a conexão usando PDO
            $connection = new PDO("mysql:host=" . $this->server . ";dbname=" . $this->database . ";charset=utf8;", $this->uid, $this->password);
            return $connection;
        } catch (PDOException $ex) {
            echo ($ex->getMessage());
            return null;
        }
    }
}
