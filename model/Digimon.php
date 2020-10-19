<?php

require_once './model/Connection.php';

class Digimon
{
  public static function Create($name, $img, $level)
  {
    $query = Connection::ExecuteNonQuery("insert into digimon values(null, :name, :img, :level)", [
      ':name' => $name,
      ':img' => $img,
      ':level' => $level,
    ]);

    return $query;
  }

  public static function ReadAll()
  {
    $query = Connection::ExecuteQueryAll("select * from digimon", []);

    return $query;
  }

  public static function DeleteAll()
  {
    $query = Connection::ExecuteQueryAll("delete from digimon", []);

    return $query;
  }
}
