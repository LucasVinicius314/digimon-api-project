<?php

require_once('Connection.php');

// Classe Digimon
class Digimon
{
    // Inserir no banco de dados
    public function Insert($id, $name, $img, $level)
    {
        try {
            $db = new Connection();

            $connection = $db->Connect();

            $sql = $connection->prepare("insert into digimons values(null, $id, '$name', '$img', '$level');");

            $sql->execute();
        } catch (PDOException $ex) {
            echo ($ex->getMessage());
            return null;
        }
    }

    // Retornar um digimon por id
    public function SelectById($id)
    {
        try {
            $db = new Connection();

            $connection = $db->Connect();

            $sql = $connection->prepare("select * from digimons where id = $id;");

            $sql->execute();

            if ($sql->rowCount() > 0) return $sql->fetchAll(PDO::FETCH_CLASS);
            else return null;
        } catch (PDOException $ex) {
            echo ($ex->getMessage());
            return null;
        }
    }

    // Retornar um digimon por nome
    public function SelectByName($name)
    {
        try {
            $db = new Connection();

            $connection = $db->Connect();

            $sql = $connection->prepare("select * from digimons where name = $name;");

            $sql->execute();

            if ($sql->rowCount() > 0) return $sql->fetchAll(PDO::FETCH_CLASS);
            else return null;
        } catch (PDOException $ex) {
            echo ($ex->getMessage());
            return null;
        }
    }

    // Retornar digimons por nível
    public function SelectByLevel($level)
    {
        try {
            $db = new Connection();

            $connection = $db->Connect();

            $sql = $connection->prepare("select * from digimons where level = '$level';");

            $sql->execute();

            if ($sql->rowCount() > 0) return $sql->fetchAll(PDO::FETCH_CLASS);
            else return null;
        } catch (PDOException $ex) {
            echo ($ex->getMessage());
            return null;
        }
    }

    // Retornar todos os digimons
    public function SelectAll()
    {
        try {
            $db = new Connection();

            $connection = $db->Connect();

            $sql = $connection->prepare("select * from digimons;");

            $sql->execute();

            if ($sql->rowCount() > 0) return $sql->fetchAll(PDO::FETCH_CLASS);
            else return null;
        } catch (PDOException $ex) {
            echo ($ex->getMessage());
            return null;
        }
    }

    // Retornar quantidade de digimons
    public function SelectCountAll()
    {
        try {
            $db = new Connection();

            $connection = $db->Connect();

            $sql = $connection->prepare("select count(*) from digimons;");

            $sql->execute();

            if ($sql->rowCount() > 0) return $sql->fetchAll(PDO::FETCH_CLASS);
            else return null;
        } catch (PDOException $ex) {
            echo ($ex->getMessage());
            return null;
        }
    }

    // Retornar níveis distintos
    public function SelectDistinctLevels()
    {
        try {
            $db = new Connection();

            $connection = $db->Connect();

            $sql = $connection->prepare("select distinct level from digimons;");

            $sql->execute();

            if ($sql->rowCount() > 0) return $sql->fetchAll(PDO::FETCH_CLASS);
            else return null;
        } catch (PDOException $ex) {
            echo ($ex->getMessage());
            return null;
        }
    }

    // Retornar quantidade de um certo nível
    public function SelectCountByLevel($level)
    {
        try {
            $db = new Connection();

            $connection = $db->Connect();

            $sql = $connection->prepare("select count(*) from digimons where level = '$level';");

            $sql->execute();

            if ($sql->rowCount() > 0) return $sql->fetchAll(PDO::FETCH_CLASS);
            else return null;
        } catch (PDOException $ex) {
            echo ($ex->getMessage());
            return null;
        }
    }
}
