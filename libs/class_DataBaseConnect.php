<?php

class DataBaseConnect{

    private static $db_from;
    private static $db_where;
     

    public static function getInstance()
    {
        if(self::$db_from === null){
            $host = 'localhost';
            $dbname = 'imena';
            $user = 'root';
            $password = '020959';

            self::$db_from = new PDO("mysql:host = $host;dbname=$dbname",$user,$password);
            self::$db_from->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$db_from->exec("set names utf8");

            return self::$db_from;
        }
        else
        {
            return self::$db_from;
        }
    }
    
    public static function getInstance2()
    {
        if(self::$db_where === null)
        {
            $host = 'localhost';
            $dbname = 'imena_updated';
            $user = 'root';
            $password = '020959';
    
            self::$db_where = new PDO("mysql:host = $host;dbname=$dbname",$user,$password);
            self::$db_where->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$db_where->exec("set names utf8");

            return self::$db_where;
        }
    else
        {
            return self::$db_where;
        }
    }

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}
    
}


