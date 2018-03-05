<?php
  /**
   *
   */
  class ConnectionFactory
  {
    public static function GetConnection()
    {
      $server = "localhost";
      $username = "testuser";
      $password = "";
      $dbname = "finances";

      $connection = new mysqli(
        $server,
        $username,
        $password,
        $dbname
      );

      if($connection->connect_error){
        return null;
      }

      return $connection;
    }
  }


 ?>
