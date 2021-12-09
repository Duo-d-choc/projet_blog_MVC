<?php

namespace App\Fram\Factories;

class PDOFactory
{
    private static string $dsn = "mysql:host=db;dbname=my_db";
    private static string $username ='root';
    private static string $password = 'example';

    public static function getMysqlConnection(): \PDO{
        try{
            return new \PDO(self::$dsn, self::$username, self::$password);
        }
        catch(\PDOException $e){
            //return "Connection failed: " . $e->getMessage();
            return false;
        };
    }
}
