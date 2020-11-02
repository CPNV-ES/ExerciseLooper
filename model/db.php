<?php

class db
{
    static function connect()
    {
        $ini_array = parse_ini_file("dbconfig.ini");
        $dsn= "mysql:host=$ini_array[host];dbname=$ini_array[dbname]";
        return new PDO($dsn, $ini_array['user'], $ini_array['password']);
    }
}
