<?php

namespace App\Fram\Factories;

class PDOFactory
{
    private static string $dsn = 'mysql:host=localhost:3306;dbname=personnages';
    private static string $userName = 'root';
    private static string $password = '';

    public static function getMySqlConnexion(): PDO{
        return new PDO(self::$dsn, self::$userName, self::$password);
    }
}