<?php
namespace Micaela\App\Libs;

use PDO;
use PDOException;

class Spdo
{
  private static $instancia = null;
  private static $pdo;

  private function __construct()
  {
    // try {
    //   $host     = constant('HOST');
    //   $port     = constant('PORT_DB');
    //   $db       = constant('DB');
    //   $user     = constant('USER');
    //   $password = constant('PASSWORD');
    //   $charset  = constant('CHARSET');

    //   $connection = "mysql:host={$host};port={$port};dbname={$db};charset={$charset}";
    //   $options    = [
    //     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    //     PDO::ATTR_EMULATE_PREPARES => false,
    //   ];
    //   self::$pdo = new PDO($connection, $user, $password, $options);
    // } catch (PDOException $e) {
    //   print_r('Error connection: ' . $e->getMessage());
    // }
  }

  public static function conectar()
  {
    $host     = constant('HOST');
    $port     = constant('PORT_DB');
    $db       = constant('DB');
    $user     = constant('USER');
    $password = constant('PASSWORD');
    $charset  = constant('CHARSET');

    $connection = "mysql:host={$host};port={$port};dbname={$db};charset={$charset}";
    $options    = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_EMULATE_PREPARES => false,
    ];
    return $pdo = new PDO($connection, $user, $password, $options);
  }

  // public static function singleton()
  // {
  //   if (!isset(self::$instancia)) {
  //     new self();
  //   }
  //   return self::$instancia;
  // }
  

  // public static function cerrar()
  // {
  //   self::$instancia = null;
  // }
  
}