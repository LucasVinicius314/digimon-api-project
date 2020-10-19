<?php

class Connection
{
  public static function ExecuteQueryOne($sql, $parameters)
  {
    try {
      $host = DB_HOST;
      $database = DB_NAME;
      $user = DB_USER;
      $password = DB_PASSWORD;

      $connection = new PDO("mysql:host=$host;dbname=$database;charset=utf8;", $user, $password);

      $query = $connection->prepare($sql);
      $query->execute($parameters);

      return (object) [
        'data' => $query->fetchObject(),
        'error' => false,
      ];
    } catch (PDOException $ex) {
      return (object) [
        'data' => null,
        'error' => $ex->getMessage(),
      ];
    }
  }

  public static function ExecuteQueryAll($sql, $parameters)
  {
    try {
      $host = DB_HOST;
      $database = DB_NAME;
      $user = DB_USER;
      $password = DB_PASSWORD;

      $connection = new PDO("mysql:host=$host;dbname=$database;charset=utf8;", $user, $password);

      $query = $connection->prepare($sql);
      $query->execute($parameters);

      return (object) [
        'data' => $query->fetchAll(PDO::FETCH_CLASS),
        'error' => false,
      ];
    } catch (PDOException $ex) {
      return (object) [
        'data' => null,
        'error' => $ex->getMessage(),
      ];
    }
  }

  public static function ExecuteNonQuery($sql, $parameters)
  {
    try {
      $host = DB_HOST;
      $database = DB_NAME;
      $user = DB_USER;
      $password = DB_PASSWORD;

      $connection = new PDO("mysql:host=$host;dbname=$database;charset=utf8;", $user, $password);

      $query = $connection->prepare($sql);
      $query->execute($parameters);

      return (object) [
        'data' => true,
        'error' => false,
      ];
    } catch (PDOException $ex) {
      return (object) [
        'data' => null,
        'error' => $ex->getMessage(),
      ];
    }
  }
}
