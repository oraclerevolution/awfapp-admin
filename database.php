<?php
/**
 * Created by PhpStorm.
 * User: Assia Jean
 * Date: 04/08/2019
 * Time: 01:39
 */


class Database
{
    private static $dbHost = "localhost";
    private static $dbName = "bd_awf";
    private static $dbUsername = "root";
    private static $dbUserpassword = "";

    private static $connection = null;

    public static function connect()
    {
        if(self::$connection == null)
        {
            try
            {
              self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName, self::$dbUsername, self::$dbUserpassword);
            }
            catch(PDOException $e)
            {
                die($e->getMessage());
            }
        }
        return self::$connection;
    }

    public static function disconnect()
    {
        self::$connection = null;
    }

}


?>