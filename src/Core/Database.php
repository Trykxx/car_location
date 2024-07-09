<?php

namespace App\Core;

class Database
{
    //propriété statique $host =, $dbname, $userName, $password, $connection
    private static string $host = 'localhost';
    private static string $dbname = 'car_location';
    private static string $userName = 'root';
    private static string $password = '';
    private static \PDO $connection;

    // method static iniConnection
    // retourner la connexion a la base de données
    // $connexion = new PDO

    public static function iniConnection()
    {
        try {
            self::$connection = new \PDO("mysql:host=" . self::$host . ";dbname=" . self::$dbname, self::$userName, self::$password);
        } catch (\PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
            exit();
        }
    }

    /**
     * Get the value of connection
     */
    public static function getConnection()
    {
        return self::$connection;
    }

}
